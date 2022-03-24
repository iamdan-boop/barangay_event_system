<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certificate of Indigency</title>
    <style>
        body{
            padding: 0;
            margin: 0;
        }
        .wrapper{
            width: 816px;
            height: 1054px;
            position: absolute;
            transform: translateX(-50%);
            left: 50%;
        }
        .content-wrapper{
            width: 716px;
            height: 1000px;
            margin-left: 50px;
            border: 2px solid #000;
        }
    </style>
</head>
<body>

    <div class="wrapper">
        <div class="content-wrapper">

            <!-- header -->

            <table class="header" width="100%">
                
                <tr>
                    <td> 
                            <img src="images/logo_naga.png" 
                                style="width: 100px;
                                        height: 100px;
                                        padding-top: 10px;
                                        padding-left: 50px;">
                        </td>
                        <td style="text-align: center;">
                            <p style="font-size: 16px;">
                                 Republic of the Philippines<br>
                                 City of Naga<br>
                                 <b style="font-size: 18px;">Barangay Pacol</b>
                            </p>
                            <p style="font-size: 20px;">
                                OFFICE OF THE PUNONG BARANGAY
                            </p>
                        </td>
                        <td>
                            <img src="images/official_seal.png" 
                                style="width: 100px;
                                        height: 100px;
                                        padding-left: 10px;
                                        padding-top: 10px;">
                        </td>
                </tr>
            </table>

            <!-- Title -->

            <table class="title" width="100%" style="margin-top: -20px;">
                <tr>
                    <td style="height: 20px;"></td>
                </tr>
                <tr>
                    <td style="text-align: center; line-height: 5px; background: rgb(248, 74, 74); color: #fff;">
                        <h1>CERTIFICATE OF INDIGENCY</h1>
                    </td>
                </tr>
            </table>

            <!-- content -->
            <center>
            <table class="content" width="90%" style="margin-top: 20px;">
                <tr>
                    <td style="letter-spacing: 2px; padding-left: 50px;">
                        <p><b><i> TO WHOM IT MAY CONCERN: </i></b></p>
                    </td>
                </tr>
                <tr>
                    <td style="padding-left: 50px; padding-right: 10px; text-align: justify;">
                        <p style="text-align: justify; letter-spacing: 2px; line-height: 20px;">
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; This is to certify that <u><b>{{$citizen['last_name']}}, {{$citizen['first_name']}} {{$citizen['middle_name']}}</b></u>,
                        <u><b>{{Carbon\Carbon::parse($citizen['dob'])->diff(\Carbon\Carbon::now())->format('%y')}}</b></u> years of age, <u><b>{{$citizen['status']}}</b></u>, whose signature and picture appears below and a bonafide resident of this barangay with postal 
                        address at <u><b>{{$citizen['address']}}</b></u>.
                        </p>

                        <p style="text-align: justify; letter-spacing: 3px; line-height: 20px;">
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; This certifies further that the bearer is qualified recipient 
                            to avail any assistance from your good office that can extend to him/her.  
                        </p>

                        <p style="text-align: justify; letter-spacing: 2px; line-height: 20px;">
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; This certification is issued upon the request of the above
                            named person for <u><b>{{$purpose}}</b></u> prupose only.
                        </p>

                        <p style="text-align: justify; letter-spacing: 2px; line-height: 20px;">
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Issued this <u><b>{{Carbon\Carbon::parse($created_at)->format('jS')}}</b></u> day of <u><b>{{Carbon\Carbon::parse($created_at)->format('F Y')}}</b></u> at Barangay 
                            Pacol, Naga City, Philippines.
                        </p>
                    </td>
                </tr>
                
            </table>

            <!-- signatures -->

            <table class="signing" width="80%">
                <tr>
                    <td style="line-height: 25px; padding-top: 20px; padding-left: 30px">
                        CTC <br>
                        Date Issued <br>
                        Place Issued 
                    </td>
                    <td style="line-height: 25px; padding-top: 20px; width: 5%;">
                        : <br>
                        : <br>
                        : <br>
                    </td>
                    <td style="line-height: 25px; padding-top: 20px;" >
                        <u><b>&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; 5829064 &nbsp; &nbsp; &nbsp; &nbsp; </b></u> <br>
                        <u><b>&nbsp; &nbsp; &nbsp; &nbsp; {{Carbon\Carbon::parse($created_at)->format('m/d/Y')}} &nbsp; &nbsp;&nbsp; </b></u> <br>
                        <u><b style="font-size: 13px;">PACOL, NAGA CITY</b></u>
                    </td>
                    <td style="position: relative; line-height: 25px; padding-top: 50px;">
                        <div style="position: absolute; left: 200px; width: 200px; padding-right: 10px; text-align: center;">
                            <p><b> {{strtoupper($captain)}}</b> <br>
                               Punong Barangay
                            </p>
                        </div>
                    </td>   
                </tr>
                
            </table>

            <!-- footer -->

            <table width="75%" style="margin-left: 25%;">
                <tr>
                    
                    <td style="position: relative;">
                        <img src="{{ isset($image['image']) ? $image['image'] : ''}}" alt="Dummy Picture" width="120px" height="120px" style="margin-left: 470px; margin-top:  50px; border: 1px solid #000;">
                        <p style="position:  absolute; left: 450px; top: 190px; width: 150px;"> &nbsp; Applicant's signature &nbsp;</p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 25%; position: relative;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <img src="qr_codes/{{$qr_codes}}" alt="QR CODES" width="140px" height="140px" 
                                    style="position: absolute; top:  -100px; left:  0px;
                                            border: 1px solid #000;"></td>
                </tr>
            </table>

            
            <table width="100%">
                <tr>
                    <td>
                        <p style="text-align:  center; margin-top: 0; margin-left: 0px; margin-top: 90px;">Control #<b style="color: red;">{{$control_number}}</b></p>
                    </td>
                </tr>   
            </table>
        </center>

        </div>
    </div>
    
</body>
</html>