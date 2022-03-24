<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barangay certification</title>
    <style>
        body {
            padding: 0;
            margin: 0;
        }

        .wrapper {
            width: 816px;
            height: 1248px;
            position: absolute;
            transform: translateX(-50%);
            left: 50%;
        }

        .content-wrapper {
            width: 716px;
            height: 1210px;
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
                    <td style="width: 25%;">
                        <img src="images/logo_naga.png" alt="Logo of Naga" width="100px" height="100px" style="padding-left: 20px; padding-top: 15px">
                    </td>
                    <td style="text-align: center;">
                        <p>Republic of the Philippines <br>
                            City of Naga <br>
                            <b> Barangay Pacol </b>
                        </p>
                    </td>
                    <td style="width:25%">
                        <img src="images/official_seal.png" alt="Naga Official Seal" width="110px" height="105px" style="padding-left: 50px; padding-top: 15px">
                    </td>
                </tr>
            </table>

            <!-- Title -->

            <table class="title" width="100%" style="margin-top: -40px;">
                <tr>
                    <td style="text-align: center; letter-spacing: 4px;">
                        <h3>OFFICE OF THE PUNONG BARANGAY</h3>
                        <hr style="border: 1px solid #000; margin-top: -10px; box-shadow: 0 2px 2px 0 rgb(7, 7, 7);">
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center; line-height: 5px;">
                        <h2>BARANGAY BUSINESS CLEARANCE</h2>

                    </td>
                </tr>
            </table>

            <!-- content -->
            <center>
                <table class="content" width="90%" style="margin-top: 10px;">
                    <tr>
                        <td style="padding-left: 50px">
                            <p><b>TO WHOM IT MAY CONCERN:</b></p>
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: center; line-height: 25px;">

                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; This is to certify that the Business or Trade activity described below:

                        </td>
                    </tr>

                    <!-- business details -->

                    <tr>
                        <td>
                            <table width="75%" style="margin-left: 210px">
                                <tr>
                                    <td style="color: red; text-align: center; border-bottom: 1px solid #000; font-weight: 600;">{{$business_name}}</td>
                                </tr>
                                <tr>
                                    <td style="margin-top:0; text-align: center; font-size: 12px; padding-bottom: 10px;">
                                        Business Name / Trade Activity
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align: center; border-bottom: 1px solid #000; font-weight: 600;">{{$address}}</td>
                                </tr>
                                <tr>
                                    <td style="margin-top:0; text-align: center; font-size: 12px; padding-bottom: 10px;">
                                        Business Address
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align: center; border-bottom: 1px solid #000; font-weight: 600;">{{$business_type}}</td>
                                </tr>
                                <tr>
                                    <td style="margin-top:0; text-align: center; font-size: 12px; padding-bottom: 10px;">
                                        Type of Business
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align: center; border-bottom: 1px solid #000; font-weight: 600;">{{$manager}}</td>
                                </tr>
                                <tr>
                                    <td style="margin-top:0; text-align: center; font-size: 12px; padding-bottom: 10px;">
                                        Proprietor / Operator / Manager
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align: center; border-bottom: 1px solid #000; font-weight: 600;">{{$residence_address}}</td>
                                </tr>
                                <tr>
                                    <td style="margin-top:0; text-align: center; font-size: 12px; padding-bottom: 10px;">
                                        Residence Address
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <!-- Continuation of content -->

                    <tr>
                        <td style="text-align: justify; line-height: 25px; padding-left: 50px">

                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; being applied for <u>&nbsp; {{$applied_for}} &nbsp;</u> of the corresponding Mayor's Permit has been found to be: <br>


                        </td>
                    </tr>

                    <tr>
                        <td>

                            <!-- table for continuation content -->

                            <table>
                                <tr>
                                    <td width="46px" style="padding-left: 50px;">
                                        <b style="text-decoration: line-through;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</b>
                                    </td>
                                    <td style="text-align: justify; margin-top: 0;">
                                        Complying with the provisions of existing Barangay Ordinances, rules and regulations being enforced in this Barangay.
                                    </td>
                                </tr>
                                <tr>
                                    <td width="46px" style="padding-left: 50px;">
                                        <b style="text-decoration: line-through;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</b>
                                    </td>
                                    <td style="text-align: justify;">
                                        Partially complying with the provisions of existing Barangay ordinances, rules and regulations being enforced in this Barangay.
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <!-- Continuation of content -->

                    <tr>
                        <td style="text-align: justify; line-height: 25px;">
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; In view of foregoing, this Barangay, thru undersigned

                        </td>
                    </tr>

                    <tr>
                        <td>
                            <!-- table for continuation content -->

                            <table>
                                <tr>
                                    <td width="46px" style="padding-left: 50px;">
                                        <b style="text-decoration: line-through;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</b>
                                    </td>
                                    <td style="text-align: justify; margin-top: 0;">
                                        Interposes NO Objection for the issuance of the corresponding Mayor's Permit being applied for.
                                    </td>
                                </tr>
                                <tr>
                                    <td width="46px" style="padding-left: 50px;">
                                        <b style="text-decoration: line-through;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</b> <br>
                                        &nbsp; <br> <br>&nbsp; <br>
                                    </td>
                                    <td style="text-align: justify;">
                                        Recommends only the issuance of a "Temporary Mayor's Permit" for not more than three (3) months and within that period the requirements
                                        under existing barangay ordinance, rules and regulation in that matter should be totally complied with otherwise, this barangay would
                                        take the necessary actions, within legal bound to stop its continued operation.
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: justify; line-height: 50px;">

                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Issued this <u>{{Carbon\Carbon::parse($created_at)->format('jS')}}</u> day of <u>&nbsp; &nbsp; &nbsp; &nbsp; {{Carbon\Carbon::parse($created_at)->format('F Y')}} &nbsp; &nbsp; &nbsp; &nbsp; </u> at Barangay Pacol, Naga City, Philippines.

                        </td>
                    </tr>
                </table>

                <!-- signatures -->

                <table class="signing" width="90%" style="margin-top: -15x;">
                    <tr>
                        <!-- td style="text-align: justify; margin-top: 0;" -->
                        <td style="line-height: 20px; padding-top: 10px; text-align: start">
                            Res. Cert. No. <br>
                            Issued at <br>
                            Issued on<br>
                            &nbsp; <br>
                            O.R No. <br>
                            Amount Paid <br>
                            Doc Stamp <br>
                            Date
                        </td>
                        <td style="line-height: 20px; padding-top: 10px; width: 5%;">
                            : <br>
                            : <br>
                            : <br>
                            &nbsp; <br>
                            : <br>
                            : <br>
                            : <br>



                        </td>


{{--                        <td style="line-height: 20px; padding-top: 10px; text-align: center">--}}
{{--                            <u><b>{{$cert_no}}</b></u> <br>--}}
{{--                            <u><b>PACOL, NAGA</b></u> <br>--}}
{{--                            <u><b>{{Carbon\Carbon::parse($created_at)->format('m/d/Y')}}</b></u> <br>--}}
{{--                            &nbsp; &nbsp; &nbsp; <br>--}}
{{--                            <u><b>{{$or_no}}</b></u> <br>--}}
{{--                            <u><b> {{$amount_paid}}</b></u> <br>--}}
{{--                            <u><b>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </b></u> <br>--}}
{{--                            <u><b>{{Carbon\Carbon::parse($created_at)->format('m/d/Y')}}</b></u>--}}
{{--                        </td>--}}
{{--                        <td style="width: 110px; padding-top: 70px; padding-left: 40px; text-align: center;">--}}
{{--                            <div class="box" style="font-size:20px;font-weight: 600; color: red; border: 1px solid #000; text-align: center;">{{Carbon\Carbon::parse($created_at)->format('Y')}}</div>--}}
{{--                            <br>--}}
{{--                            <b><i style="font-size: 8px;">To be posted inside the premises of the business establishment</i></b> <br>--}}
{{--                            <br>--}}
{{--                            <br>--}}

{{--                            <b style="color: red;">B20-119</b>--}}
{{--                        </td>--}}
{{--                        <td style="line-height: 25px; padding-left: 60px; text-align: center;">--}}
{{--                            <p><b>&nbsp;&nbsp;&nbsp;&nbsp;{{strtoupper($captain)}} </b> <br>--}}
{{--                                &nbsp; &nbsp; Punong Barangay--}}
{{--                            </p>--}}
{{--                            <img src="{{ isset($image['image']) ? $image['image'] : ''}}" alt="Dummy Picture" width="120px" height="120px" style="margin-top: 20px; margin-left: 30px; border: 1px solid #000; text-align: center;">--}}
{{--                            <br>--}}
{{--                            <u><b>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </b></u> <br>--}}
{{--                            <p style="margin-left: 10px; margin-top: -5px;"> &nbsp; Applicant's signature &nbsp;</p>--}}
{{--                        </td>--}}
{{--                    </tr>--}}

{{--                </table>--}}

{{--            </center>--}}

            <!-- footer -->

            <table width="100%" style="font-size: 11px; text-align: center;">
                <tr>
                    <td>Barangay Hall of Pacol, KM. 9 Zone 2 Pacol Naga City 4400 <br>Telephone No. (054) 473-0664</td>

                    <td></td>
                </tr>
            </table>

        </div>
    </div>

</body>

</html>
