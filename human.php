<?php
class Human {
        public $name;
        public $address;
        public $experience;
        public $education;
        public $skill;
        public $interest;
        public $award;
        public $references;
        public $profile;
        public $information;

        function setName($name){
            $this->name = $name;
        }
        function getName(){
           return $this->name;
        }

        function setAddress($address){
            $this->address = $address;
        }
    
        function getAddress(){
            return $this->address;
        }

        function setExperience($experience){
            $this->experience = $experience;
        }
    
        function getExperience(){
            return $this->experience;
        }

        function setEducation($education){
            $this->education = $education;
        }
    
        function getEducation(){
            return $this->education;
        }

        function setSkill($skill){
            $this->skill = $skill;
        }
    
        function getSkill(){
            return $this->skill;
        }

        function setInterest($interest){
            $this->interest = $interest;
        }
    
        function getInterest(){
            return $this->interest;
        }

        function setAward($award){
            $this->award = $award;
        }
    
        function getAward(){
            return $this->award;
        }

        function setReferences($references){
            $this->references = $references;
        }
    
        function getReferences(){
            return $this->references;
        }

        function setProfile($profile){
            $this->profile = $profile;
        }
    
        function getProfile(){
            return $this->profile;
        }

        function setInformation($information){
            $this->information = $information;
        }
    
        function getInformation(){
            return $this->information;
        }
    }
?>
