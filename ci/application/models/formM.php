<?php
class FormM extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    public function signup_insert($username,$email,$password)
    {
        $password = md5($password);
        $q="INSERT INTO signup (username,email,password) VALUES ('$username','$email','$password')";
        // print_r($q); die();
        $this->db->query($q);
        return 1;
    }


    public function insert_form($title, $fname, $mname, $lname, $aadhar, $pan, $mobile1, $gender, $dob, $email, $category, $blood_group, $religion, $minority, $handicap, $laddress, $paddress, $city, $district, $pincode, $state,$father_name,$mother_name)
    {
        $sql="INSERT INTO rs (title, fname, mname, lname, aadhar, pan_no, mobile1, gender, dob, email, category, blood_group, religion, minority, handicap, laddress, paddress, city, district, pincode, state,father_name, mother_name) VALUES ('$title', '$fname', '$mname', '$lname', '$aadhar', '$pan', '$mobile1', '$gender', '$dob', '$email', '$category', '$blood_group', '$religion', '$minority', '$handicap', '$laddress', '$paddress', '$city', '$district', '$pincode', '$state','$father_name','$mother_name')";
    //    print_r($sql);
        $this->db->query($sql);
        return 1;
    }

    
    public function signin_data($email,$password)
    {
        $password = md5($password);
        $data="SELECT * FROM signup WHERE email='$email' and password='$password'";
       
        $q=$this->db->query($data);
        return $q->result_array();
        // if($data->num_rows() )
        // {
        //     return true;
        // }else{
        //     return false;
        // }

    }
     public function display()
    {
        $data="SELECT * FROM rs ";
       
        $q=$this->db->query($data);
        return $q->result();

    }
    public function delete_entry($id)
    {
        $result=$this->db->delete('rs',array('id'=>$id));
        return $result;
    }
    public function getAllRecords($id)
    {
      $qurey=$this->db->get_where('rs',array('id'=>$id));
      if($qurey->num_rows() > 0)
      {
          return $qurey->row();
      }
    }
    public function update_data($id,$title, $fname, $mname, $lname, $aadhar, $pan, $mobile1, $gender, $dob, $email, $category, $blood_group, $religion, $minority, $handicap, $laddress, $paddress, $city, $district, $pincode, $state,$father_name,$mother_name)
        {
               $data="UPDATE rs SET title='$title', fname='$fname',mname='$mname', lname='$lname',aadhar='$aadhar', pan_no='$pan', mobile1='$mobile1', gender='$gender',dob='$dob', email='$email', category='$category', blood_group='$blood_group', religion='$religion', minority='$minority', handicap='$handicap', laddress='$laddress', paddress='$paddress', city='$city', district='$district', pincode='$pincode', state='$state',father_name='$father_name',mother_name='$mother_name' WHERE id=$id";
            // print_r($sql);
            // die();
               return $this->db->query($data);
           
          //   return $data;

            
        }
    
        // public function fRecords($id)
        // {
        //   $qurey=$this->db->get_where('signup',array('id'=>$id));
        // //   echo "<pre>";
        // //   print_r($qurey);
        // //   die();
        //   if($qurey->num_rows() > 0)
        //   {
        //       return $qurey->row();
        //   }
        // }
        // public function forgot_data($id,$fname,$username,$password)
        // {
        //        $data="UPDATE signup SET fname='$fname',username='$username',password='$password' WHERE id='$id'";
        //     print_r($sql);
        //     die();
        //        return $this->db->query($data);
        // }
        public function insert_contact($name,$email,$subject,$message){
            $q="INSERT INTO contact_us(name,email,subject,message) VALUES ('$name','$email','$subject','$message')";
            $this->db->query($q);
            return 1;
        }
        public function contact_datafatch(){
            $data="SELECT * FROM contact_us";
       
        $q=$this->db->query($data);
        return $q->result();
        }
        public function profile_display($email)
        {
            $data="SELECT id,title,fname,mname,lname,gender,religion,blood_group,mobile1,email FROM rs WHERE '$email'=email";
        //    print_r($data); die();
            $q=$this->db->query($data);
            return $q->result();
    
        }



public function get_forgot($email)
    {
        $query="SELECT * FROM signup WHERE email='$email'";
        $data=$this->db->query($query);
        return $data->result_array();
    }
        public function new_password($id,$pass)
        {
            $pass = md5($pass);
               $data="UPDATE signup SET password='$pass' WHERE id='$id'";
            // print_r($sql);
            // die();
               return $this->db->query($data);
        }


}
  


?>