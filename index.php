<?php
    include "human.php";
    include "sql_dbconnection.php";
    $db1 = new DBConnection();
    $hien = new Human();
    $hien->setName('Hien.ThiNguyen');

    $hien->setAddress('WBS Viet Nam');

    $experience_hien = array(
        array( 
            "time" => "2012-2014",
            "company_name" => 'Công ty TNHH 1 TV Sơn Long',
            "position" => 'DEVELOPER',
            "content" => "Mục tiêu chính của blog chính là chia sẻ đến người học những thông tin hữu ích, thủ thuật thú vị với website wordpress. Ngoài ra những thông tin về PHP, JavaScript, HTML/CSS cũng được đề cập khá nhiều."
        ),
        array( 
            "time" => "2014-2016",
            "company_name" => 'Công ty CP FPT',
            "position" => 'DEVELOPER',
            "content" => "Mục tiêu chính của blog chính là chia sẻ đến người học những thông tin hữu ích, thủ thuật thú vị với website wordpress. Ngoài ra những thông tin về PHP, JavaScript, HTML/CSS cũng được đề cập khá nhiều."
        ),
        array( 
            "time" => "2012-2014",
            "company_name" => 'Công ty CP Beework',
            "position" => 'DEVELOPER',
            "content" => "Mục tiêu chính của blog chính là chia sẻ đến người học những thông tin hữu ích, thủ thuật thú vị với website wordpress. Ngoài ra những thông tin về PHP, JavaScript, HTML/CSS cũng được đề cập khá nhiều."
        )
    );
    $hien->setExperience($experience_hien);

    $education_hien = array(
        array(
            'time'=>'1996-2008',
            'school_name' => 'TH,THCS,THPT',
            'specialized' => 'Văn hóa cơ bản',
            'content' => "Mục tiêu chính của blog chính là chia sẻ đến người học những thông tin hữu ích, thủ thuật thú vị với website wordpress. Ngoài ra những thông tin về PHP, JavaScript, HTML/CSS cũng được đề cập khá nhiều."
        ),
        array(
            'time'=>'2008-2011',
            'school_name' => 'Cao đẳng CN Phúc Yên',
            'specialized' => 'Kế toán tài chính',
            'content' => "Mục tiêu chính của blog chính là chia sẻ đến người học những thông tin hữu ích, thủ thuật thú vị với website wordpress. Ngoài ra những thông tin về PHP, JavaScript, HTML/CSS cũng được đề cập khá nhiều."
        ),
        array(
            'time'=>'2012-2014',
            'school_name' => 'Đại học Giao thông vận tải',
            'specialized' => 'Kế toán doanh nghiệp',
            'content' => "Mục tiêu chính của blog chính là chia sẻ đến người học những thông tin hữu ích, thủ thuật thú vị với website wordpress. Ngoài ra những thông tin về PHP, JavaScript, HTML/CSS cũng được đề cập khá nhiều."
        ),
    );

    $hien->setEducation($education_hien);

    $skill_hien = array(
        array(
            'title'=>'PHP',
            'percent' => '70',
        ),
        array(
            'title'=>'HTML,CSS',
            'percent' => '60',
        ),
        array(
            'title'=>'EXCEL',
            'percent' => '30',
        ),
        array(
            'title'=>'EXCEL',
            'percent' => '20',
        ),
        array(
            'title'=>'EXCEL',
            'percent' => '50',
        ),
        array(
            'title'=>'EXCEL',
            'percent' => '60',
        ),
        array(
            'title'=>'EXCEL',
            'percent' => '70',
        ),
        array(
            'title'=>'EXCEL',
            'percent' => '80',
        ),
        array(
            'title'=>'EXCEL',
            'percent' => '90',
        )
    );
    $hien->setSkill($skill_hien);

    $information_hien = array(
       
        'phone'=> ['0978742821','0978742821'],
      
        'email'=> 'hienthinguyenvp@gmail.com',
        'address'=> 'Tầng 8, tòa nhà Detech, nguyễn Phong Sắc, Cầu giấy, Hà Nội'
    );
    $hien->setInformation($information_hien);
    
    $award_hien = array(
        array(
            'prize'=> 'Employee of The Month',
            'detail1'=> 'Some detail of Award and more',
            'detail2'=> 'Some detail of Award and more'
        ),
        array(
            'prize'=> 'Best Coder',
            'detail1'=> 'Some detail of Award and more',
            'detail2'=> 'Some detail of Award and more'
        )
        );
        $hien->setAward($award_hien);

        $reference_hien = array(
            array(
                'detail1'=>'Phone',
                'detail2'=>'Email',
                'name'=> 'Name of Refrance',
                'phone'=> '01234566555',
                'email'=> 'hien@gmail.com'  
            ),
            array(
                'detail1'=>'Phone',
                'detail2'=>'Email',
                'name'=> 'Name of Refrance',
                'phone'=> '01234566555',
                'email'=> 'hien@gmail.com'  
            )
        );
        $hien->setReferences($reference_hien);

    // $hien->setInterest();
    // $hien->setReferences();
    // $hien->setProfile();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Thiết kế CV</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <link type="text/css" rel="stylesheet" href="css/cv.css">

    </head>
    <body class="mx-auto mt-5 mb-3 body">
        <!-- <h1>Trang thái kết nối:
            <?php
                $db1->connect();
            ?>
        </h1> -->
        <header class="container mt-5 mb-2 mx-auto">
            <div class="row">
                <div class="col-lg-7">
                    <div class="row">
                        <div class="col-md-3">
                            <img src="anh/avatar.jpg" class="rounded-circle float-left bits-img" alt="avatar" width="150px" height="150px">
                        </div>
                        <div class="col-md-9" style="line-height: 10px;">
                            <h2>
                                <?php 
                                    echo $hien->getName();
                                ?>
                            <h2>
                            <h4>
                                <?php 
                                    echo $hien->getAddress();
                                ?>
                            </h4>
                        </div>
                    </div>
                </div>        
                <div class="col-lg-5 flex-column ml-auto">
                    <div class="row">
                        <div class="col-sm-2 icon">
                            <i class="fas fa-phone-square"></i>
                        </div>
                        <div class="col-sm-10 header-fontsize">
                            <?php
                                foreach($hien->getInformation()['phone'] as $phone){
                            ?>
                                    <p><?php echo $phone ?></p>
                                <?php } ?>
                        </div> 
                    </div>                    
                    <div class="row">  
                        <div class="col-sm-2 icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="col-sm-10 header-fontsize">
                            <p><?php echo $hien->getInformation()['email']?></p>
                        </div>
                    </div>
                    <div class="row">  
                        <div class="col-sm-2 icon">
                            <i class="fas fa-home"></i>
                        </div>
                        <div class="col-sm-10 header-fontsize">
                            <p><?php echo $hien->getInformation()['address']?></p>
                        </div>
                    </div>
                </div>
            </div>           
        </header>
        <div class="row">
            <div class="col-lg-7 flex-column">
                    <h3>EXPERIENCE</h3>
                    <div class="row">
                        <?php
                            foreach ($experience_hien as $value) {
                        ?>  
                                <div class="col-md-3"><?php echo $value["time"] ?></div>
                                <div class="col-md-9">
                                    <p><b><?php echo $value["company_name"]?></b></p>
                                    <mark><?php echo $value["position"]?></mark>
                                    <p><?php echo $value["content"]?></p>
                                </div>
                        <?php }
                        ?>
                    </div>
                <div>
                    <h3>EDUCATION</h3>
                    <div class="row">
                        <?php
                            foreach($hien->getEducation() as $value){  
                        ?>
                        <div class="col-md-3"><?php echo $value['time']?></div>
                        <div class="col-md-9">
                            <p><b><?php echo $value['school_name']?></b></p>
                            <mark><?php echo $value['specialized']?></mark>
                            <p><?php echo $value['content']?></p>
                        </div>
                            <?php } 
                            ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 flex-column">
                <div>
                    <h3>PROFILE</h3>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, It is a long established fact that a reader will be distracted by the readable content of a page </p>
                </div>
                <div class="mt-5">
                    <h3>SKILLS</h3>
                    <div>
                        <?php
                            foreach($hien->getSkill() as $value){  
                        ?>
                            <div>
                                <h7><?php echo $value['title'] ?></h7>
                                <div class="progress">
                                    <div class="progress-bar w-<?php echo $value['percent'] ?>"></div>
                                </div>
                            </div>
                            <?php }
                            ?>
                    </div>
                </div>
            </div>
        </div>
        <footer class="row mt-3 p-1">
            <div class="col-xl-4">
                <h3>AWARDS</h3>
                <div class="flex-column ml-auto mt-1">
                        <?php
                            foreach($hien->getAward() as $value){
                        ?>
                        <p><b><?php echo $value['prize']?></b></p>
                        <p><?php echo $value['detail1']?></p>
                        <p><?php echo $value['detail2']?></p>
                    <?php }
                    ?>
                </div>
            </div>
            <div class="col-xl-4">
                <h3>REFERENCES</h3>
                <div class="flex-column ml-auto mt-1">
                    <div>
                        <?php
                            foreach($hien->getReferences() as $value){
                        ?>
                            <p><b><?php echo $value['name']?></b></p>
                            <div class="row">
                                <div class="col-sm-2"><b><?php echo $value['detail1']?></b></div>
                                <div class="col-sm-10">
                                    <mark><?php echo $value['phone']?></mark>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2"><b><?php echo $value['detail2']?></b></div>
                                <div class="col-sm-10">
                                    <mark><?php echo $value['email']?></mark>
                                </div>
                            </div>
                        <?php }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <h3>INTEREST</h3>
                <img src="anh/1.PNG" class="mt-5" width="300px" height="ml-auto">
            </div>
        </footer>
    </body>
</html>

