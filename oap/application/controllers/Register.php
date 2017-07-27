<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends MY_Controller {

    private $_Auth = '';
    private $_API = '';

    public function __construct() {
        parent::__construct();
        $this->_Auth = new User_authentication;
        $this->_API = new API;
    }

    public function newuser() {

        $uid = 'USR' . date('YdmHis');
        $this->session->userdata('NAME', $this->_POST('fullname'));
        $this->session->userdata('PHONE', $this->_POST('phone'));
        $this->session->userdata('EMAIL', $this->_POST('email'));
        // $res = $this->post_captcha($this->_POST('g-recaptcha-response'));

        if ($this->_POST('code') !== $this->_POST('chk')) {
            $this->session->set_flashdata('msg', "You have entered wrong captcha");
            redirect('auth/register');
        } else {
            $password = rand(1000, 10000);
            $user = array(
                'id' => $uid,
                'name' => $this->_POST('fullname'),
                'phone' => $this->_POST('phone'),
                'email' => $this->_POST('email'),
                'password' => $this->_Auth->cryptPass($password),
                'code' => rand(0, 5) . date('Hs'),
                'rawpass'=>$password
            );
            // $this->sendNotification();
            $this->sendRegdetails($this->_POST('fullname'), $this->_POST('phone'), $this->_POST('email'), $password);
            $this->saveData('users', $user);
            $check = $this->_POST('sendsms');
            if ($check == 1) {
                $this->session->set_flashdata('msg', "Successfully Registered. We have sent your login details to your Email & Phone");
            } else {
                $this->session->set_flashdata('msg', "Successfully Registered. We have sent your login details to your Email");
            }
            redirect('auth/authorize');
        }
    }

    function post_captcha($user_response) {
        $fields_string = '';
        $fields = array(
            'secret' => '6Lcr2h4UAAAAAO9oe5JIhoDhOVxyOQDzPSz9G4d5',
            'response' => $user_response
        );
        foreach ($fields as $key => $value)
            $fields_string .= $key . '=' . $value . '&';
        $fields_string = rtrim($fields_string, '&');

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');
        curl_setopt($ch, CURLOPT_POST, count($fields));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, True);

        $result = curl_exec($ch);
        curl_close($ch);

        return json_decode($result, true);
    }

    public function mobile_newuser() {


        $json = file_get_contents('php://input');
        $obj = json_decode($json);
        $phone = $obj->{'phone'};
        $name = $obj->{'name'};
        $email = $obj->{'email'};
        $password = $obj->{'password'};



        $uid = 'USR' . date('YdmHis');

        $user = array(
            'id' => $uid,
            'name' => $name,
            'phone' => $phone,
            'email' => $email,
            'password' => $this->_Auth->cryptPass($password),
            'code' => rand(0, 5) . date('Hs'),
        );
        // $this->sendNotification();

        $this->saveData('users', $user);
    }

}
