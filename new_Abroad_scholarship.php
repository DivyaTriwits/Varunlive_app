<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
      .mycards {
  background-color: rgba(244, 186, 3, 1);
}
    .cards {
  width: 90%;
  margin: 16px auto;
}
.text-center{
  text-align: center;
  align-items: center;
}
.content {
  color: black;
  border-radius: 20px;
  background-color: white;
  padding: 24px 32px;
}

.card {
  display: inline-block;
  width: 32%;
  margin-right: 1%;
  margin-bottom: 16px;
  vertical-align: top;
}

/* Grid with Flex */
@supports (display: grid) {
  .cards {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    grid-gap: 16px;
    grid-auto-rows: 1fr;
  }

  /* to make background fill entire height */

  .card {
    width: auto;
    margin: 0;
    display: flex;
    flex-direction: column;

  }

/* Uncomment to make text same height */
.content {
    flex: 1;
    display: flex;
    flex-direction: column;
  }
}
.product-new {
    background: #fff;
    border-radius: 50%;
    color: #fff;
    font-size: 11px;
    font-weight: 600;
    height: 42px;
    right: 0px;
    line-height: 42px;
    position: absolute;
    text-align: center;
    text-shadow: 1px 2px 1px rgb(0 0 0 / 14%);
    top:0px;
    width: 42px;
    z-index: 5;
}

.product-sale-off {
    background: red;
    border-radius: 10px 0 0;
    bottom: 62px;
    color: #fff;
    font-size: 12px;
    font-weight: 500;
    height: 25px;
    /*line-height: 20px;*/
    position: absolute;
    right: 0;
    text-align: center;
    text-shadow: 1px 2px 1px rgb(0 0 0 / 14%);
    width: 100px;
    z-index: 5;
}
h1{
    color:#41044D;
}
.btn-primary{
    background-color:#41044D;
    border-color:#41044D;
    color:#F2B625 !important
}
.Add {
    margin-top: 72px;
    background-color: #ff7f45;
    height: 260px;
    width: 300px;
    background-image: url(assets/images/add/ads-logo.png);
    background-size: 100% 100%;
}
  .wrapper {
  margin: 50px auto;
  width: 280px;
  height: 370px;
  background: white;
  border-radius: 10px;
  -webkit-box-shadow: 0px 0px 8px rgba(0,0,0,0.3);
  -moz-box-shadow:    0px 0px 8px rgba(0,0,0,0.3);
  box-shadow:         0px 0px 8px rgba(0,0,0,0.3);
  position: relative;
  z-index: 90;
}

.ribbon-wrapper-red {
  width: 85px;
  height: 88px;
  overflow: hidden;
  position: absolute;
  top: -3px;
  right: -3px;
}
.ribbon-wrapper-green {
  width: 85px;
  height: 88px;
  overflow: hidden;
  position: absolute;
  top: -3px;
  left: -3px;
}

.ribbon-red {
    font: bold 15px Sans-Serif;
    color: #fff;
    text-align: center;
    text-shadow: rgba(255,255,255,0.5) 0px 1px 0px;
    -webkit-transform: rotate(45deg);
    -moz-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    -o-transform: rotate(45deg);
    position: relative;
    padding: 4px 0;
    left: -5px;
    top: 15px;
    width: 120px;
    background-color: #ea181e;
    background-image: -webkit-gradient(linear, left top, left bottom, from(#ea181e), to(#b90005));
    background-image: -webkit-linear-gradient(top, #ea181e, #b90005);
    background-image: -moz-linear-gradient(top, #BFDC7A, #8EBF45);
    background-image: -ms-linear-gradient(top, #BFDC7A, #8EBF45);
    background-image: -o-linear-gradient(top, #BFDC7A, #8EBF45);
    color: #fff;
    -webkit-box-shadow: 0px 0px 3px rgba(0,0,0,0.3);
    -moz-box-shadow: 0px 0px 3px rgba(0,0,0,0.3);
    box-shadow: 0px 0px 3px rgba(0,0,0,0.3);
}

.ribbon-green {
    font: bold 15px Sans-Serif;
    color: #fff;
    text-align: center;
    text-shadow: rgba(255,255,255,0.5) 0px 1px 0px;
    -webkit-transform: rotate(-45deg);
    -moz-transform: rotate(-45deg);
    -ms-transform: rotate(-45deg);
    -o-transform: rotate(-45deg);
    position: relative;
    padding: 4px 0;
    left: -29px;
    top: 1px;
    border: 1px solid;
    width: 120px;
    background-color: #FF8C00;
    background-image: -webkit-gradient(linear, left top, left bottom, from( #FF8C00), to(#FF8C00));
    background-image: -webkit-linear-gradient(top,  #FF8C00, # #FF8C00);
    background-image: -moz-linear-gradient(top, #BFDC7A, #8EBF45);
    background-image: -ms-linear-gradient(top, #BFDC7A, #8EBF45);
    background-image: -o-linear-gradient(top, #BFDC7A, #8EBF45);
    color: #fff;
    -webkit-box-shadow: 0px 0px 3px rgba(0,0,0,0.3);
    -moz-box-shadow: 0px 0px 3px rgba(0,0,0,0.3);
    box-shadow: 0px 0px 3px rgba(0,0,0,0.3);
}

.ribbon-red:before,
.ribbon-red:after{
  content: "";
  border-top: 3px solid #b90005;   
  border-left: 3px solid transparent;
  border-right: 3px solid transparent;
  position:absolute;
  bottom: -3px;
}

.ribbon-green:after,
.ribbon-green:after{
  content: "";
  border-top: 3px solid #6e8900;   
  border-left: 3px solid transparent;
  border-right: 3px solid transparent;
  position:absolute;
  bottom: -3px;
}

.ribbon-red:before{
  left: 0;
}
.ribbon-green:before{
  right: 0;
}

.ribbon-red:after{
  right: 0;
}
.ribbon-green:after{
  left: 0;
}
  
element.style {
}
.page-item:first-child .page-link {
    border-radius: 6px 0 0 6px;
}
.page-item.active .page-link {
    color: #ffffff;
}
.page-item.active .page-link {
    z-index: 2;
    color: #fff;
    background-color: #41044D;
    border-color: #41044D;
}
  .pagination>li>a, .pagination>li>span {
    position: relative;
    float: left;
    padding: 5px 5px;
    margin-left: -1px;
    line-height: 1.42857143;
    color: #41044D;
    text-decoration: none;
    background-color: #fff;
    border: 1px solid #ddd;
}

  </style>
</head>
<body>
  <div class="mycards">
    <div class="text-center">
                        <h1 class="text-capitalize section-heading" style="margin-bottom: 30px">
                            <?php 
                            $scholarshipsCategory = str_replace('%20', ' ', $this->uri->segment(2));
                            if( $scholarshipsCategory == "scholarship" || $scholarshipsCategory == "Scholarship" ){
                                $scholarshipsCategory = "Scholarships for Students in India"; 
                                echo $scholarshipsCategory;
                            }
                            elseif($scholarshipsCategory == "International" || $scholarshipsCategory == "international"){
                                 $scholarshipsCategory = "Abroad"; 
                                echo $scholarshipsCategory;

                            }
                            else{
                                echo $scholarshipsCategory;
                            } ?>
                                
                        </h1>
                    </div>
                  
  <div class="cards">
       <?php $index =1; $node=1; foreach($scholarships as $value): 
                if($node == 1){
                    $node+=1;
                }
                ?>
    <div class="card" >
     <?php $Date = $value->scholarship_added_date;
                        $newDate = date("Y-m-d", strtotime($Date));  
                        $now = time(); // or your date as well
                        $todaydate=date('Y-m-d');
                        $your_date = strtotime($newDate);
                        $datediff = $now - $your_date;
                        $days= round($datediff / (60 * 60 * 24));
                        $t=$value->application_end_date;
                        $exp= date("Y-m-d", strtotime($t));
                        $esort=strtotime($exp);
                        $expdiff =  $esort-$now;
                        //$exprydate=round($expdiff / (60 * 60 * 24));
                        $date1 = new DateTime($exp);
                        $date2 = $date1->diff(new DateTime($todaydate));
                        $exprydate= $date2->days;
                        //print_r($exprydate);exit;
                        //time difference in seconds for coundown timer
                        ?>
                        <!--  <?php if($days <= 4){?>
                        <span class="product-new"><img src="<?php echo base_url()?>assets/newtag.png"></span>
                        <?php }?> -->
                        <div class="card-header custom-card-header border-bottom-0 " style="">
                            <?php if($days <= 4){?>
                                <div class="ribbon-wrapper-green">
                                    <div class="ribbon-green" >New
                                    </div>
                                </div> <?php }?>
                                <h4 class="main-content-label tx-dark tx-medium mb-0 font addReadMore showlesscontent">
                                    <?php echo $value->scholarship_name;?>
                                </h4>
                            </div>
      <div class="content" >
          <div class="card-body card-content" > 
                                <h6 class="card-h6-content" >
                                    <div class="media-icon-card icon-margin bg-primary-transparent text-danger"  style="font-size:12px;margin-right:4px"> <i class="ti-calendar" ></i>
                                    </div>
                                    <?php $str= $value->application_end_date;
                                    $month =date("F", strtotime($str));
                                    $result = substr($month, 0, 3);
                                    echo date("d", strtotime($str)).' '.$result.' '.date("Y", strtotime($str)) ; ?>
                                </h6>
                                <?php if($value->scholarship_worth !=0){?>
                                    <h6 class="card-h6-content">
                                        <div class="media-icon-card icon-margin bg-primary-transparent text-primary"  style="font-size:12px;margin-right:4px"> <i class="fa fa-rupee" ></i>
                                        </div>
                                        <?php $amount = $value->scholarship_worth+0;
                                        $new=(int)$value->scholarship_worth;
                                        $newworthamout=$this->New_model->moneyFormatIndia($new);
                                        echo $newworthamout; ?>
                                    </h6>
                                <?php }else if($value->benefits != ''){?>
                                    <h6 class="card-h6-content">
                                        <div class="media-icon-card icon-margin bg-primary-transparent text-primary"  style="font-size:12px;margin-right:4px"> <i class="fa fa-rupee" ></i>
                                        </div>
                                        <?php echo $value->benefits; ?>
                                    </h6>
                                <?php }?>
                                <h6 class="card-h6-content">
                                    <div class="media-icon-card icon-margin bg-primary-transparent text-primary"  style="font-size:12px;margin-right:4px"> <i class="fa fa-graduation-cap" ></i>
                                    </div>
                                    <!--<?php echo $value->courses?>-->
                                    <div class="addEducationReadMore showEducationlesscontent">
                                        <?php $i = 0;
                                        $course = json_decode($value->courses);
                                        $len = count($course);
                                        foreach($course as $course){?>
                                            <?php if ($i == $len - 1) {?>
                                                <a class="educationarray" ><?php  echo $course ; ?></a>  
                                            <?php } else {?>
                                                <a class="educationarray" ><?php  echo $course ; ?>,</a>  
                                            <?php }?>
                                            <?php $i++; }?>
                                    </div>
                                </h6>
                                <?php if($exprydate<=4 && $exprydate>=0){?>
                                    <?php if($exprydate == 1){?>
                                        <span class="product-sale-off timer" id="<?php echo $value->scholarship_id?>"><?php echo $exprydate?> day to expire</span>
                                    <?php }else if($exprydate == 0){?>
                                        <span class="product-sale-off timer" id="<?php echo $value->scholarship_id?>">Expire's today</span>
                                    <?php }else{?>
                                        <span class="product-sale-off timer" id="<?php echo $value->scholarship_id?>"><?php echo $exprydate?> days to expire</span>
                                    <?php }?>
                                <?php }?>
                            </div>
                            <div class="card-footer">
                                <?php if($value->h_tags !=''){
                                    $newname =str_replace(' ', '-', strtolower($value->h_tags));
                                }else{
                                    $newname =str_replace(' ', '-', strtolower($value->scholarship_name));
                                }?>
                                <a href="<?php echo base_url('page/'.$value->scholarship_id.'/'.$newname)?>" class="btn btn-primary ripple btn-block">View</a>
                            </div>
                       
       
      </div>
      
    </div>
    <?php $node+=2;?>
    <?php $index++; endforeach; ?>
    
   
  </div>
  </div>
</body>
</html>