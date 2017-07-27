<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Mobile extends MY_Controller {

    function __construct() {
        parent::__construct();
    }

    function Authenticate_user() {

        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $u_avail = $this->db->query("SELECT * FROM users WHERE email='$username' LIMIT 1")->result();
        if (crypt($password, $u_avail[0]->password) === $u_avail[0]->password):
            echo 'Pass';
        else :
            echo 'Failed';
        endif;
    }

    function addcomment($id, $pe) {
        $name = $this->input->post('name');
        $comment = $this->input->post('comment');
        $data = array(
            'obid' => $id,
            'author' => $name,
            'body' => $comment,
            'date' => date('d-m-Y H:i:s')
        );
        $this->saveData('obituary_comments', $data);
        $this->session->set_flashdata('message_success', 'Your Condolence message has been received and is currently under review and will appear below shortly after the review');
        redirect('home/loadProfile/' . $id . '/' . $pe);
    }

    function getResp() {
        
        $json = file_get_contents('php://input');
        $obj = json_decode($json);
        $phone = explode(",", $obj->{'phone'});
        $name = explode(",", $obj->{'name'});
        $client_id = $obj->{'client_id'};
        $oid = $obj->{'obid'};
       
        $this->db->where('client_id',$client_id)->delete('phonebook');
        for ($i = 0; $i < count($name); $i++) {
            $this->db->insert('phonebook', array('client_id' => $client_id, 'oid' => $oid, 'name' => $name[$i], 'phone' => $phone[$i]));
        }
    }

    function sendMessages($oid) {
        $sample = str_replace("BUR", "", $oid);
        $new = trim($sample);
        $obituary = $this->db->where('id', $new)->get('obituary')->result();
        $message = "We regret to announce the demise of " . $obituary[0]->obtitle . " which occured on " . $obituary[0]->dod . " visit http://globaltalentlens.com/oap/home/loadProfile/" . $obituary[0]->id . "/" . $obituary[0]->obtitle;
        $this->sendCondolence($oid, $message);
    }
    
      function sendMessages2($oid) {
        $sample = str_replace("BUR", "", $oid);
        $new = trim($sample);
        $obituary = $this->db->where('id', $new)->get('obituary')->result();
        $this->sendCondolence2($oid, $obituary[0]->obtitle, $obituary[0]->dod, $new);
    }

    function getContacts($email) {
       
        $string = '';
        $contacts = $this->db->select('phone,oid')->where('client_id', $email)->get('phonebook')->result();
        array_pop($contacts);
        $new = array();
        foreach ($contacts as $value):
            $new[serialize($value)] = $value;
        endforeach;
        $array = array_values($new);
        foreach ($array as $a):
            $string .= $this->removeUnwanted($this->checkOccurence($this->sanitize($a->phone)));
        endforeach;

        $res = ltrim($string, "+");

        $arr = explode("+", $res);

        $data = array_map(function ($i) {
            return '+' . $i;
        }, $arr);
           
        foreach ($data as $d):
            $newd = array(
                'client' => $email,
                'phone' => $d,
                'oid' => $contacts[0]->oid
            );
            $this->db->insert('temp_dispatch', $newd);

        endforeach;

        //$this->db->insert('dispatch_directory', array('client' => $email, 'oid' => $contacts[0]->oid));
        $count = $this->db->where('oid', $contacts[0]->oid)->get('temp_dispatch')->num_rows();
        echo $count;
    }

    function deleteTrailingCommas($str) {
        return trim(preg_replace("/(.*?)((,|\s)*)$/m", "$1", $str));
    }

    function sanitize($str) {
        return str_replace(array("_", "-", "(", ")", " ", "?"), "", $str);
    }

    function checkOccurence($str) {
        if (substr($str, 0, 2) === '07') {
            return '+254' . ltrim($str, "0");
        } else if (substr($str, 0, 3) === '254') {
            return '+' . $str;
        } else {
            return $str;
        }
    }

    function removeUnwanted($str) {
        if (strstr($str, '+')) {
            if (count($str) < 9 && count($str) > 13) {
                
            } else {
                return $str;
            }
            return $str;
        } else {
            return NULL;
        }
    }

    function codeverify($id) {
        $result = $this->db->where('code', $id)->where('status', '0')->get('obit_code')->num_rows();
           $this->db->where('oid',$id)->delete('temp_dispatch');
              $this->db->where('oid',$id)->delete('phonebook');
        if ($result > 0) {
            // $this->db->where('code', $id)->update('obit_code', array('status' => 1));
            echo "Yes";
        } else {
            echo "No";
        }
    }

    function saveMobileComment() {
        $json = file_get_contents('php://input');
        $obj = json_decode($json);

        $oid = $obj->{'obid'};
        $body = $obj->{'body'};
        $uth_email = $obj->{'author'};
        $res = $this->db->select('name')->where('email', $uth_email)->get('users')->result();
        $name = $res[0]->name;
        $q = $this->db->insert('obituary_comments', array(
            'obid' => $oid,
            'body' => $body,
            'date' => date('d-m-Y H:i:s'),
            'author' => $name
        ));

        if ($q):
            echo 'Success';
        else:
            echo $this->db->_error_message();
        endif;
    }

    function verifyPayment($id, $code) {
        $result = $this->db->where('oid', $id)->where('code', $code)->where('payment_status', '1')->where('dispatch_status','0')->get('dispatch_directory')->num_rows();
        if ($result > 0) {
            // $this->db->where('code', $id)->update('obit_code', array('status' => 1));
            echo "Yes";
        } else {
            echo "No";
        }
    }

    function verifyUser($field, $data) {
        $result = $this->db->where($field, $data)->get('users')->num_rows();
        if ($result > 0) {
            echo "Yes";
        } else {
            echo "No";
        }
    }

}
