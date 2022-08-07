<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
$form = $this->beginWidget('CActiveForm', array(
  'id' => 'user-register-form',
  'enableClientValidation' => true,
  'clientOptions' => array(
    'validateOnSubmit' => true,
  ),
)); ?>
<style>
  body {
    color: #000;
    overflow-x: hidden;
    height: 100%;
    background-color: #B0BEC5;
    background-repeat: no-repeat
  }

  .card0 {
    box-shadow: 0px 4px 8px 0px #757575;
    border-radius: 0px
  }

  .card2 {
    margin: 0px 40px
  }

  .logo {
    width: 200px;
    height: 100px;
    margin-top: 20px;
    margin-left: 35px
  }

  .image {
    width: 360px;
    height: 280px
  }

  .border-line {
    border-right: 1px solid #EEEEEE
  }

  .facebook {
    background-color: #3b5998;
    color: #fff;
    font-size: 18px;
    padding-top: 5px;
    border-radius: 50%;
    width: 35px;
    height: 35px;
    cursor: pointer
  }

  .twitter {
    background-color: #1DA1F2;
    color: #fff;
    font-size: 18px;
    padding-top: 5px;
    border-radius: 50%;
    width: 35px;
    height: 35px;
    cursor: pointer
  }

  .linkedin {
    background-color: #2867B2;
    color: #fff;
    font-size: 18px;
    padding-top: 5px;
    border-radius: 50%;
    width: 35px;
    height: 35px;
    cursor: pointer
  }

  .line {
    height: 1px;
    width: 45%;
    background-color: #E0E0E0;
    margin-top: 10px
  }

  .or {
    width: 10%;
    font-weight: bold
  }

  .text-sm {
    font-size: 14px !important
  }

  ::placeholder {
    color: #BDBDBD;
    opacity: 1;
    font-weight: 300
  }

  :-ms-input-placeholder {
    color: #BDBDBD;
    font-weight: 300
  }

  ::-ms-input-placeholder {
    color: #BDBDBD;
    font-weight: 300
  }

  input,
  textarea {
    padding: 10px 12px 10px 12px;
    border: 1px solid lightgrey;
    border-radius: 2px;
    margin-bottom: 5px;
    margin-top: 2px;
    width: 100%;
    box-sizing: border-box;
    color: #2C3E50;
    font-size: 14px;
    letter-spacing: 1px
  }

  input:focus,
  textarea:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    border: 1px solid #304FFE;
    outline-width: 0
  }

  button:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    outline-width: 0
  }

  a {
    color: inherit;
    cursor: pointer
  }

  .btn-blue {
    background-color: #1A237E;
    width: 150px;
    color: #fff;
    border-radius: 2px
  }

  .btn-blue:hover {
    background-color: #000;
    cursor: pointer
  }

  .bg-blue {
    color: #fff;
    background-color: #1A237E
  }

  @media screen and (max-width: 991px) {
    .logo {
      margin-left: 0px
    }

    .image {
      width: 300px;
      height: 220px
    }

    .border-line {
      border-right: none
    }

    .card2 {
      border-top: 1px solid #EEEEEE !important;
      margin: 0px 15px
    }
  }
</style>

<div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
  <div class="card card0 border-0">
    <div class="row d-flex">
      <div class="col-lg-6">
        <div class="card1 pb-5">
          <div class="row"> <img src="images/ptpn2.jpg" class="logo"> </div>
          <div class="row px-3 justify-content-center mt-4 mb-5 border-line"> <img src="images/regis.png" class="image"> </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="card2 card border-0 px-4 py-5">
          <div class="row px-3 mb-4">
            <div class="line"></div> <small class="or text-center">Sign Up</small>
            <div class="line"></div>
          </div>



          <div class="form-outline mb-4">
            <!-- <input type="text" id="form3Example1cg" class="form-control form-control-lg" /> -->
            <div class="input-group mb-2">
              <label for="userId">ID Username</label><br>
              <div class="input-group-prepend">
                <i class="bi bi-person-circle"></i>
              </div>

              <?php echo $form->textField(
                $model,
                'userId',
                array('class' => 'mb-4', 'placeholder' => "Masukkan Id Username")
              ); ?>
            </div>
          </div>

          <div class="form-outline mb-4">
            <!-- <input type="email" id="form3Example3cg" class="form-control form-control-lg" /> -->
            <label for="userPassword">Password</label><br>
            <?php echo $form->passwordField(
              $model,
              'userPassword',
              array('class' => 'mb-4', 'placeholder' => "Masukkan Password")
            ); ?>
          </div>

          <div class="form-outline mb-4">
            <!-- <input type="password" id="form3Example4cg" class="form-control form-control-lg" /> -->
            <label for="userNama">Nama</label><br>
            <?php echo $form->textField(
              $model,
              'userNama',
              array('class' => 'mb-4', 'placeholder' => "Masukkan Username")
            ); ?>
          </div>

          <div class=" form-outline mb-4">

            <?php echo $form->labelEx($model, 'userGroup'); ?><br>
            <?php echo $form->dropDownList($model, "userGroup", CHtml::listData(
              Grouping::model()->findAll(),
              'id',
              'group'
            ), array("empty" => "Pilih User"));

            ?>
            <?php echo $form->error($model, 'userGroup'); ?>
          </div>

          <div class="form-check  mb-10">
            <input class="" type="checkbox" value="" id="flexCheckChecked" checked>
            <label class="form-check-label" for="flexCheckChecked">
              I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
            </label>
          </div><br>

          <div class="d-flex justify-content-center">
            <!-- <? // php // echo CHtml::submitButton('Register', array('class' => 'fadeIn fifth')); 
                  ?> &nbsp; -->
            <input name="register" id="register" class="btn btn-outline-info" type="submit" value="Register">
            &nbsp;
          </div>
          <br>
          <p class="login-wrapper-footer-text">Have already an account? <?php echo CHtml::link('Login', array('login')); ?></p>

          </form>

        </div>
      </div>
    </div>
  </div>
</div>
</div>
</section>


<?php $this->endWidget(); ?>
</div>