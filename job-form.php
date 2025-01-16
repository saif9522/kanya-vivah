<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>कन्या विवाह & विकास सोसाइटी</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="form/assets/css/bootstrap.css">
    <link rel="stylesheet" href="form/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="form/assets/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="form/assets/css/time.css">
    <link rel="stylesheet" href="form/assets/css/style.css">

    <link rel="stylesheet" href="form/assets/css/upload-image.css">
    <link rel="stylesheet" href="form/assets/css/font-awesome.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.6.0/css/all.css">
    <link rel="icon" href="form/assets/images/favicon.png" sizes="32x32">
    <link href="form/assets/css/semantic.min.css" rel="stylesheet" type="text/css" />
    <link href="form/assets/css/select2.min.css" rel="stylesheet" />
    <script src='../../www.google.com/recaptcha/api.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/signature_pad"></script>

</head>

<body>

    <div class="container container-custom">
        <header>
         
            <script type='text/javascript' src='form/assets/js/jquery.min.js' id='jquery-core-js'></script>
            <script type='text/javascript' src='form/assets/js/jquery-migrate.min.js' id='jquery-migrate-js'></script>

            <div style="position:absolute ;top:32px;right:5%;z-index:999999;" id="gtranslate_wrapper">

                <style>
                    .switcher {
                        font-family: Arial;
                        font-size: 12pt;
                        text-align: left;
                        cursor: pointer;
                        overflow: hidden;
                        width: 173px;
                        line-height: 17px;
                        z-index: 99999 !important;
                    }

                    .switcher a {
                        text-decoration: none;
                        display: block;
                        font-size: 12pt;
                        -webkit-box-sizing: content-box;
                        -moz-box-sizing: content-box;
                        box-sizing: content-box;
                    }

                    .switcher a img {
                        vertical-align: middle;
                        display: inline;
                        border: 0;
                        padding: 0;
                        margin: 0;
                        opacity: 0.8;
                    }

                    .switcher a:hover img {
                        opacity: 1;
                    }

                    .switcher .selected {
                        background: #fff linear-gradient(180deg, #efefef 0%, #fff 70%);
                        position: relative;
                        z-index: 9999;
                    }

                    .switcher .selected a {
                        border: 1px solid #ccc;
                        color: #666;
                        padding: 3px 5px;
                        width: 161px;
                    }

                    .switcher .selected a:after {
                        height: 24px;
                        display: inline-block;
                        position: absolute;
                        right: 10px;
                        width: 15px;
                        background-position: 50%;
                        background-size: 11px;
                        background-image: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 285 285'><path d='M282 76.5l-14.2-14.3a9 9 0 0 0-13.1 0L142.5 174.4 30.3 62.2a9 9 0 0 0-13.2 0L3 76.5a9 9 0 0 0 0 13.1l133 133a9 9 0 0 0 13.1 0l133-133a9 9 0 0 0 0-13z' style='fill:%23666'/></svg>");
                        background-repeat: no-repeat;
                        content: "" !important;
                        transition: all .2s;
                    }

                    .switcher .selected a.open:after {
                        -webkit-transform: rotate(-180deg);
                        transform: rotate(-180deg);
                    }

                    .switcher .selected a:hover {
                        background: #fff
                    }

                    .switcher .option {
                        position: relative;
                        z-index: 9998;
                        border-left: 1px solid #ccc;
                        border-right: 1px solid #ccc;
                        border-bottom: 1px solid #ccc;
                        background-color: #eee;
                        display: none;
                        width: 171px;
                        max-height: 198px;
                        -webkit-box-sizing: content-box;
                        -moz-box-sizing: content-box;
                        box-sizing: content-box;
                        overflow-y: auto;
                        overflow-x: hidden;
                    }

                    .switcher .option a {
                        color: #000;
                        padding: 3px 5px;
                    }

                    .switcher .option a:hover {
                        background: #fff;
                    }

                    .switcher .option a.selected {
                        background: #fff;
                    }

                    #selected_lang_name {
                        float: none;
                    }

                    .l_name {
                        float: none !important;
                        margin: 0;
                    }

                    .switcher .option::-webkit-scrollbar-track {
                        -webkit-box-shadow: inset 0 0 3px rgba(0, 0, 0, 0.3);
                        border-radius: 5px;
                        background-color: #f5f5f5;
                    }

                    .switcher .option::-webkit-scrollbar {
                        width: 5px;
                    }

                    .switcher .option::-webkit-scrollbar-thumb {
                        border-radius: 5px;
                        -webkit-box-shadow: inset 0 0 3px rgba(0, 0, 0, .3);
                        background-color: #888;
                    }

                    @media only screen and (max-width: 520px) {
                        .switcher {
                            font-family: Arial;
                            font-size: 12pt;
                            text-align: left;
                            cursor: pointer;
                            overflow: hidden;
                            width: 173px;
                            line-height: 17px;
                            z-index: 99999 !important;
                            margin-top: -24px;
                        }

                    }

                    .appi_online_form .overlay {
                        position: fixed;
                        top: 0;
                        bottom: 0;
                        left: 0;
                        right: 0;
                        background: rgba(0, 0, 0, 0.7);
                        transition: opacity 500ms;
                        visibility: hidden;
                        opacity: 0;
                        z-index: 9999;
                        display: flex;
                        justify-content: center;
                        align-items: center;
                    }

                    .appi_online_form .overlay:target {
                        visibility: visible;
                        opacity: 1;
                    }

                    .appi_online_form .popup {
                        margin: 70px auto;
                        padding: 30px 20px;
                        background: #fff;
                        border-radius: 5px;
                        max-width: 700px;
                        position: relative;
                        transition: all 2s ease-in-out;
                        width: calc(100% - 20px);
                    }

                    .appi_online_form .popup .close {
                        position: absolute;
                        top: 9px;
                        right: 19px;
                        transition: all 200ms;
                        font-size: 30px;
                        font-weight: bold;
                        text-decoration: none;
                        color: #333;
                    }

                    .appi_online_form .popup h2 {
                        padding-top: 20px;
                        font-size: 19px;
                    }

                    .appi_online_form .popup .content {
                        max-height: 30%;
                        overflow: auto;
                    }

                    .appi_online_form .overlay.active {
                        opacity: 1;
                        visibility: visible;
                    }

                    @media only screen and (max-width: 575px) {
                        .appi_online_form .popup h2 {
                            padding-top: 20px;
                            font-size: 17px;
                        }
                    }

    .logo-bx .logo-section a {
        display: block;
    }

    .logo-bx .logo-section a img {
        width: 200px;
    }

    .logo-bx {
        display: flex;
        justify-content: space-evenly;
        align-items: center;
    }

    .client-dash {
        justify-content: center;
        display: flex;
    }

    .navbar-brand img {
        display: block;
        max-width: 400px;
        margin-top: 10px
    }

    .sidebar-nav.navbar-collapse ul li>ul>li li>a {
        padding-top: 7px !important;
        padding-bottom: 7px !important;
        display: block;
    }

    #wrapper .navbar navbar-header {
        padding: 0px 20px;
        display: flex;
        justify-content: center;

    }

    #wrapper .container-fluid {

        display: flex;
        justify-content: center;
    }

    ul.nav.navbar-top-links.navbar-right {
        position: absolute;
        right: 28px;
        top: 10px;
    }

    nav.navbar.navbar-default.navbar-static-top {
        background: #fff;
        box-shadow: rgb(99 99 99 / 20%) 0px 2px 8px 0px;
        border-color: #e7e7e7;

    }

    .dropdown-toggle::after {
        display: none !important;
    }

    #wrapper .navbar {
        padding: 0px 20px;
        display: flex;
        justify-content: center;
        height: 138px;

    }

    .dropdown-user {
        right: 0px;

    }

    .nav.navbar-top-links.navbar-right a {
        margin-top: 0px;
        text-decoration: none;
        color: #5c1994;
        border: 1px solid #ccc;
        padding: 4px 13px;
        border-radius: 4px;
    }

    .nav.navbar-top-links.navbar-right a:hover,
    .nav.navbar-top-links.navbar-right a:focus,
    .nav.navbar-top-links.navbar-right a:active {
        color: #fff;
        background-color: #5c1994;
        border-color: #5c1994;
    }

    @media only screen and (max-width:767px) {
        .nav.navbar-top-links.navbar-right a {
            margin-top: 22px;

        }

    }


    .navbar-header {
        padding: 0px;
        margin: 0px;
        height: 75px;
    }

    #wrapper .navbar {
        height: auto;
    }

    .navbar-brand img {
        display: inline-block;
        margin-top: 10px;
    }

    #wrapper .container-fluid {

        display: flex;
        justify-content: space-between;
    }

    ul.nav.navbar-top-links.navbar-right {
        position: absolute;
        right: 20px;
        top: 15px;
    }

    #wrapper .navbar {
        padding: 0px 0px;
        display: flex;
        justify-content: center;

    }

    .image_new {
        max-height: 306px;
    }

    @media only screen and (max-width: 360px) {
        .navbar-brand img {
            display: block;
            max-width: 169px;
        }
    }

    @media print {
        .img-frontend-bx {
            text-align: left;
        }

        .img-frontend-bx img {
            max-width: 80%;
            text-align: left;
        }
    }
</style>


        </header>
        <style>
    .Back_btn a {
    padding: 10px;
    background: #ab51aa;
    display: block;
    color: #fff;
    width: 100px;
    border-radius: 3px;
    text-align: center;
}
</style>
        <div class="col-sm-12 mt-5 mb-5">
            <div class="form_section">
            <div class="Back_btn"><a href="index.php">Back</a></div>
                <div class="logo-bx">
                    <div class="text-center logo-section"> <a href="https://e-telehealth.org/Signup"><img src="form/assets/images/logo.png" alt="logo" width="300"></a></div>
                </div>
                <div class="ques-title-box">
                    <h1 class="ques-title-adol">कन्या विवाह & विकास सोसाइटी</h1>
    
    <h2><b> भारत सरकार के विधानानातर्गत </b></br>
        <b>बिहार सरकार द्वारा पंजीकृत, पंजीयन संख्या - S000277<br></h2>

       <h1 class="apply_tt mb-5">आवेदन का प्रारूप</h1>
</div>
                <form id="mentalWellness" action="" onsubmit="return onSubmit()" enctype="multipart/form-data" name="mentalWellness" method="POST" class="intake">
                    <table class="w-100">
                        <tr>
                            <td>
                                <div class="row">

                                    <div class="col-md-6 ">
                                        <div class="mb-3">
                                            <input type="hidden" name="form_type" value="">
                                            <label for="" class="form-label">आवेदन का प्रारूप: <span>*</span></label>
                                            <input type="text" class="form-control" id="" name="" value="">
                                                                                    </div>
                                    </div>
                                    <div class="col-md-6 ">
                                        <div class="mb-3">
                                            <label for="" class="form-label">आवेदित पद का नाम: <span>*</span></label>
                                            <input type="text" class="form-control" name="" value="">
                                                                                    </div>
                                    </div>

                                    <!-- <div class="col-md-2">
                                        <div class="mb-3">
                                            <label for="" class="form-label">आवेदन फोटो: <span>*</span></label>
                                            <label class="image-input">
                                                <input type="file" accept="image/png,image/jpeg" max-size="1000000" name="file">
                                                <input type="hidden" name="">
                                                <img src="" alt="">
                                              </label>
                                                                                    </div>
                                    </div> -->

                                    
                                    
                                    <div class="col-md-6 col-lg-4">
                                        <div class="mb-3">
                                            <label for="" class="form-label">आवेदित प्रखण्ड/कार्यक्षेत्र:<span>*</span></label>
                                            <input type="text" class="form-control" name="" value="">
                                            
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-lg-4">
                                        <div class="mb-3">
                                            <label for="city" class="form-label">जिला:<span>*</span></label>
                                            <input type="text" class="form-control" name="city" value="">
                                                                                    </div>
                                    </div>

                              
                                    <div class="col-md-6 col-lg-4">
                                        <div class="mb-3">
                                            <label for="zip_code" class="form-label">पिन कोड: <span>*</span></label>
                                            <input onkeypress="return isZipCodeKey(event);" maxlength="10" type="text" class="form-control" name="zip_code" value="">
                                                                                    </div>
                                    </div>

                                    <div class="col-md-6 col-lg-4">
                                        <div class="mb-3">
                                            <label for="city" class="form-label">1. अभ्यार्थी का नाम:<span>*</span></label>
                                            <input type="text" class="form-control" name="city" value="">
                                                                                    </div>
                                    </div>

                                    <div class="col-md-6 col-lg-4">
                                        <div class="mb-3">
                                            <label for="city" class="form-label">आधार नं०:<span>*</span></label>
                                            <input type="text" class="form-control" name="city" value="">
                                                                                    </div>
                                    </div>

                                    <div class="col-md-6 col-lg-4">
                                        <div class="mb-3">
                                            <label for="father" class="form-label">2. पिता/पति का नाम:<span>*</span></label>
                                            <input type="text" class="form-control" name="father" value="">
                                                                                    </div>
                                    </div>


                                    <div class="col-md-6 col-lg-4">
                                        <div class="mb-3">
                                            <label for="" class="form-label">3. जन्म तिथि (दिन/महीना/वर्ष):<span>*</span></label>
                                            <div class="ui calendar" id="example4">
                                                <div class="ui input left icon">
                                                    <i class="fa fa-calendar calendar-icon" aria-hidden="true"></i>
                                                    <input type="text" name="birthdate" class="form-control w-100" placeholder="mm-dd-yy" value="">
                                                </div>
                                                                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-lg-4">
                                        <div class="mb-3">
                                            <label for="blad_group" class="form-label">बल्ड ग्रुप: <span>*</span></label>
                                            <input  maxlength="" type="text" class="form-control" name="blad_group" value="">
                                                                                    </div>
                                    </div>

                                    <div class="col-md-6 col-lg-4">
                                        <div class="mb-3">
                                            <label for="hasband" class="form-label">4. वैवाहिक स्थिति (यदि विवाहित है तो पति का नाम): <span>*</span></label>
                                            <input  maxlength="10" type="text" class="form-control" name="hasband" value="">
                                                                                    </div>
                                    </div>
                                    

                                    <div class="col-md-6 col-lg-4">
                                        <div class="mb-3"  style="position: relative;">
                                            <label for="" class="form-label">
                                                लिंग:<span>*</span></label>
                                            <div class="ques-num">
                                                <div class="ques-d-flex">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="gender" value="Male" >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Male
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="gender" value="Female" >
                                                        <label class="form-check-label" for="flexRadioDefault2">
                                                            Female
                                                        </label>
                                                    </div>
                                                    

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="mb-3">
                                            <label for="email_address" class="form-label">मेल पता <span>*</span>
                                            </label>
                                            <input type="email" class="form-control" name="email_address" id="email_address" onblur="return checkEmail()" value="">
                                            <input type="hidden" value="no" id="email_exists">
                                                                                        <div id="email_error_message" class="error-message"></div>
                                        </div>
                                    </div>

                                                                            <!-- Field is hidden if $parentEmailAddressEfamilies is null or not set -->
                                        <input type="hidden" name="parent_email" id="parent_email" value="">
                                    
                                    <div class="col-md-6 col-lg-4">
                                        <div class="mb-3">
                                            <label for="phone_number" class="form-label">मोबाइल नंबर <span>*</span></label>
                                            <input type="tel" class="form-control" name="phone_number" maxlength="18" onKeyPress="return isNumberKey(event)" value="">
                                                                                    </div>
                                    </div>
                                 
                                    <div class="col-md-6 col-lg-4">
                                        <div class="mb-3">
                                            <label for="" class="form-label">5. पद का नाम:-</label>
                                            <div class="custom-select " style="width:100%;">
                                                <select class="form-select" aria-label="Default select example" name="mhp_language">
                                                    <option value="" disabled selected>पद का चयन करें</option>
                                                    <option value="block-incharge">ब्लॉक इंचार्ज</option>
                                                    <option value="prakhand-incharge">प्रखंड इंचार्ज</option>
                                                    <option value="district-incharge">जिला इंचार्ज</option>
                                                    <option value="research-incharge">अनुसंधान इंचार्ज</option>
                                                    <option value="block-supervisor">ब्लॉक पर्यवेक्षक</option>
                                                    <option value="panchayat-assistant">पंचायत सहायक</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="" class="form-label">6. शैक्षणिक योग्यता:-
                                            </label>

                                            <div class="ques-num">
                                                <!-- <input type="text" class="form-control" name="rank_your_concerns"> -->
                                                <div class="drug-details" style="display:block;">
                                                    <div class="col-md-12">
                                                        <div class="mb-2">
                                                            <div class="table-container">
                                                                <table class="edu_details">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>परीक्षा उत्तीर्ण</th>
                                                                            <th>संस्थान का नाम</th>
                                                                            <th>बोर्ड/विश्वविद्यालय का नाम</th>
                                                                            <th>संकाय/विषय</th>
                                                                            <th>सत्र वर्ष</th>
                                                                            <th>उत्तीर्ण वर्ष</th>
                                                                            <th>पूर्णांक</th>
                                                                            <th>प्रतिशत</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <!-- मैट्रिक Row -->
                                                                        <tr>
                                                                            <td>मैट्रिक</td>
                                                                            <td><input type="text" name="matric_school"></td>
                                                                            <td><input type="text" name="matric_board"></td>
                                                                            <td><input type="text" name="matric_subject"></td>
                                                                            <td><input type="text" name="matric_session"></td>
                                                                            <td><input type="text" name="matric_year"></td>
                                                                            <td><input type="text" name="matric_marks"></td>
                                                                            <td><input type="text" name="matric_percentage"></td>
                                                                        </tr>
                                                        
                                                                        <!-- इन्टर Row -->
                                                                        <tr>
                                                                            <td>इन्टर</td>
                                                                            <td><input type="text" name="inter_school"></td>
                                                                            <td><input type="text" name="inter_board"></td>
                                                                            <td><input type="text" name="inter_subject"></td>
                                                                            <td><input type="text" name="inter_session"></td>
                                                                            <td><input type="text" name="inter_year"></td>
                                                                            <td><input type="text" name="inter_marks"></td>
                                                                            <td><input type="text" name="inter_percentage"></td>
                                                                        </tr>
                                                        
                                                                        <!-- स्नातक Row -->
                                                                        <tr>
                                                                            <td>स्नातक</td>
                                                                            <td><input type="text" name="graduate_school"></td>
                                                                            <td><input type="text" name="graduate_board"></td>
                                                                            <td><input type="text" name="graduate_subject"></td>
                                                                            <td><input type="text" name="graduate_session"></td>
                                                                            <td><input type="text" name="graduate_year"></td>
                                                                            <td><input type="text" name="graduate_marks"></td>
                                                                            <td><input type="text" name="graduate_percentage"></td>
                                                                        </tr>
                                                        
                                                                        <!-- अन्य योग्यता Row -->
                                                                        <tr>
                                                                            <td>अन्य योग्यता</td>
                                                                            <td><input type="text" name="other_school"></td>
                                                                            <td><input type="text" name="other_board"></td>
                                                                            <td><input type="text" name="other_subject"></td>
                                                                            <td><input type="text" name="other_session"></td>
                                                                            <td><input type="text" name="other_year"></td>
                                                                            <td><input type="text" name="other_marks"></td>
                                                                            <td><input type="text" name="other_percentage"></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                <div class="row pb-2">
                                    <div class="col-md-12">
                                        <p><strong>7. स्थायी निवास का पता :-
                                            </strong></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-lg-3">
                                        <div class="mb-3">
                                            <input type="hidden" name="form_type" value="">
                                            <label for="" class="form-label">ग्राम/ मोहल्ला: <span>*</span></label>
                                            <input type="text" class="form-control" id="" name="" value="">
                                                                                    </div>
                                    </div>
                                    <div class="col-md-6 col-lg-3">
                                        <div class="mb-3">
                                            <input type="hidden" name="form_type" value="">
                                            <label for="" class="form-label">पोस्ट: <span>*</span></label>
                                            <input type="text" class="form-control" id="" name="" value="">
                                                                                    </div>
                                    </div>
                                    <div class="col-md-6 col-lg-3">
                                        <div class="mb-3">
                                            <input type="hidden" name="form_type" value="">
                                            <label for="" class="form-label">पंचायत/वार्ड नं०: <span>*</span></label>
                                            <input type="text" class="form-control" id="" name="" value="">
                                                                                    </div>
                                    </div>
                                    <div class="col-md-6 col-lg-3">
                                        <div class="mb-3">
                                            <input type="hidden" name="form_type" value="">
                                            <label for="" class="form-label">थाना: <span>*</span></label>
                                            <input type="text" class="form-control" id="" name="" value="">
                                                                                    </div>
                                    </div>
                                    <div class="col-md-6 col-lg-3">
                                        <div class="mb-3">
                                            <input type="hidden" name="form_type" value="">
                                            <label for="" class="form-label">जिला: <span>*</span></label>
                                            <input type="text" class="form-control" id="" name="" value="">
                                                                                    </div>
                                    </div>
                                    <div class="col-md-6 col-lg-3">
                                        <div class="mb-3">
                                            <input type="hidden" name="form_type" value="">
                                            <label for="" class="form-label">पिन कोड: <span>*</span></label>
                                            <input type="text" class="form-control" id="" name="" value="">
                                                                                    </div>
                                    </div>
                                    <div class="col-md-6 col-lg-3">
                                        <div class="mb-3">
                                            <input type="hidden" name="form_type" value="">
                                            <label for="" class="form-label">मो० नं०: <span>*</span></label>
                                            <input type="text" class="form-control" id="" name="" value="">
                                                                                    </div>
                                    </div>

                        
                                </div>

                                <div class="row pt-3 pb-2">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="" class="form-label">9. पूरा नाम और पत्राचार का पता:-</label>
                                            <div class="ques-num devices">
                                             <div class="row">
                                                <div class="col-md-6 col-lg-8">
                                                    <div class="row">
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="mb-3">
                                                                <input type="hidden" name="form_type" value="">
                                                                <label for="" class="form-label">नाम: <span>*</span></label>
                                                                <input type="text" class="form-control" id="" name="" value="">
                                                                                                        </div>
                                                        </div>
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="mb-3">
                                                                <input type="hidden" name="form_type" value="">
                                                                <label for="" class="form-label">पिता: <span>*</span></label>
                                                                <input type="text" class="form-control" id="" name="" value="">
                                                                                                        </div>
                                                        </div>
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="mb-3">
                                                                <input type="hidden" name="form_type" value="">
                                                                <label for="" class="form-label">पता: <span>*</span></label>
                                                                <input type="text" class="form-control" id="" name="" value="">
                                                                                                        </div>
                                                        </div>
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="mb-3">
                                                                <input type="hidden" name="form_type" value="">
                                                                <label for="" class="form-label">जिला: <span>*</span></label>
                                                                <input type="text" class="form-control" id="" name="" value="">
                                                                                                        </div>
                                                        </div>
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="mb-3">
                                                                <input type="hidden" name="form_type" value="">
                                                                <label for="" class="form-label">राज्य: <span>*</span></label>
                                                                <input type="text" class="form-control" id="" name="" value="">
                                                                                                        </div>
                                                        </div>
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="mb-3">
                                                                <input type="hidden" name="form_type" value="">
                                                                <label for="" class="form-label">पिन कोड: <span>*</span></label>
                                                                <input type="text" class="form-control" id="" name="" value="">
                                                                                                        </div>
                                                        </div>
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="mb-3">
                                                                <input type="hidden" name="form_type" value="">
                                                                <label for="" class="form-label">मो० नं०: <span>*</span></label>
                                                                <input type="text" class="form-control" id="" name="" value="">
                                                                                                        </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="md-3">
                                                                <!-- <div class="proof">
                                                                    <div class="imgArea" data-title="">
                                                                      <input type="file" name="screenshoot" id="screenshoot" hidden accept="image/*" />
                                                                      <i class="fa-solid fa-cloud-arrow-up"></i>
                                                                      <h4>upload screenshoot</h4>
                                                                      <p>image size must be less than <span>2MB</span></p>
                                                                    </div>
                                                                    <button class="selectImage" type="button">select image</button>
                                                                  </div> -->
                                                                  <label for="" class="form-label">हाल का खिंचा हुआ
                                                                    फोटो <span>*</span></label>
                                                                  <label class="image-input">
                                                                    <input type="file" name="file" accept="image/png,image/jpeg" max-size="10000000">
                                                                    <input type="hidden" name="">
                                                                    <img src="" alt="">
                                                                  </label>
                                                                  
                                                                  
                                                            </div>
                                                        </div>
                                                       
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-lg-4">
                                                   <div class="row">
                                                    <div class="col-md-12 col-lg-12">
                                                        <div class="mb-3">
                                                            <label for="" class="form-label">आवेदक का हस्ताक्षर:- </label>
                                                            <div id="signature-pad" class="signature-pad" style="height:300px;">
                                                                <div class="signature-pad--body">
                                                                    <canvas width="485" height="195" style="touch-action: none;"></canvas>
                                                                </div>
                                                                <div class="signature-pad--footer">
                                                                    <div>
                                                                        <button type="button" class="button clear btn btn-primary">Clear</button>
                                                                    </div>
                                                                    <div class="description">Sign above</div>
                                                                    <div class="signature-pad--actions">
                                                                        <div>
                                                                            <!-- <button type="button" class="button save btn btn-primary">Save/Preview</button> -->
                                                                            <input type="hidden" name="signature" id="signature" class="save" value="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                   </div>
                                                </div>
                                             </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                    <div class="ques-num">

                                    <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="" class="form-label"> 8. उम्मीदवार का एक शारीरिक पहचान चिन्ह :-:</label>
                                            <input type="text" class="form-control" name="cc_name">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="" class="form-label">9. आवेदन शुल्क :</label>
                                            <div class="ques-num">
                                                <div class="ques-d-flex">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input " type="radio" name="navigator" value="" checked="">
                                                        <label class="form-check-label " for="navigator">250</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input " type="radio" name="navigator" value="">
                                                        <label class="form-check-label" for="navigator">100</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="mb-3">
                                            <label for="" class="form-label"> बैंक का नाम:<span>*</span></label>
                                            <input type="text" class="form-control" name="cc_To_From">
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-lg-4">
                                        <div class="mb-3">
                                            <label for="" class="form-label">शाखा:<span>*</span></label>
                                            <input type="text" class="form-control" name="cc_phone" maxlength="18" onKeyPress="return isNumberKey(event)">
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-lg-4">
                                        <div class="mb-3">
                                            <label for="" class="form-label">ड्राफ्ट सं0:<span>*</span></label>
                                            <input type="text" class="form-control" name="cc_phone" maxlength="18" onKeyPress="return isNumberKey(event)">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                   <p><b>Note:-</b> तथा ड्राफ्ट के पीछे अपना नाम एवं मोबाईल नं0 अवश्य लिखें।</p>
                                    </div>
                                    </div>
                                </div>
                                </div>
                                </div>
                                    
                            </td>
                        </tr>
                    </table>

                    <div class="modal-footer ">
                        <button type="button" class="btn btn-primary btn-sub">Download</button>
                        <!-- <button type="submit" name="save_submit" class="btn btn-secondary success bg-secondary" data-bs-dismiss="modal">Save</button> -->
                        <button type="submit" name="d_submit" class="btn btn-secondary success" data-bs-dismiss="modal">Submit</button>
                    </div>
            </div>
            </form>
        </div>
    </div>
    </div>

<style>
        .error {
            color: red;
        }

        #email.error {
            color: #000;
        }
    </style>

    <script src="form/assets/js/chat-jquery-3.6.0.min.js"></script>
    <script src="form/assets/js/bootstrap.bundle.min.js"></script>
    <script src="form/assets/js/semantic.min.js"></script>
    <script src="form/assets/js/bootstrap-datepicker.js"></script>
    <script src="form/assets/js/select2.min.js"></script>
    <script src="form/assets/js/main.js"></script>

    <script src="form/assets/js/jquery.validate.min.js"></script>
    <link rel="stylesheet" href="form/assets/css/signature-pad.css">
    <script src="form/assets/js/signature_pad.js"></script>
    <script src="form/assets/js/app.js"></script>
    <script src="form/assets/js/time.js"></script>

    <script src="form/assets/js/upload-image.js"></script>
</body>

</html>
