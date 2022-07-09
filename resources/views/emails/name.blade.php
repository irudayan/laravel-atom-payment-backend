
<!-- Complete Email template -->
  
<body style="background-color:grey">
    <table align="center" border="0" cellpadding="0" cellspacing="0"
           width="550" bgcolor="white" style="border:2px solid black">
        <tbody>
            <tr>
                <td align="center">
                    <table align="center" border="0" cellpadding="0" 
                           cellspacing="0" class="col-550" width="550">
                        <tbody>
                            <tr>
                                <td align="center" style="background-color: #4cb96b;
                                           height: 50px;">
                                    <a href="#" style="text-decoration: none;">
                                        <p style="color:white;
                                                  font-weight:bold;">
                                            <h3>St.Mary's Basilica Church Massbooking</h3>
                                        </p>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr style="height: 300px;">
                <td align="left" style="border: none;
                           border-bottom: 2px solid #4cb96b; 
                           padding-right: 20px;padding-left:20px">

    Dear <b>{{ $bodyContent['toName']}}</b>,<br>

    <p>You are Massbooking... </p>         
<table align="center" cellpadding="0" cellspacing="0" border="1" style="border-collapse: collapse; border:1 solid #55ff99;">
       <thead>
        <tr>
        <th class="bg-info" align="left">Name</th>
        <td class="text-left">{{$bodyContent['toName']}}</td>
        </tr>
        <tr>
        </tr>
        <th class="bg-info" align="left">Mass</th>
        <td class="text-center">{{$bodyContent['mass']}}</td>
        <tr>

        </tr>
        <th class="bg-info" align="left">Date & Time</th>
        <td class="text-center" align="left">{{$bodyContent['datetime']}}</td>
        <tr>

        </tr>
        <th class="bg-info" align="left">Intention</th>
        <td class="text-center">{{$bodyContent['intention']}}</td>
        <tr>

        </tr>
        <th class="bg-info" align="left">Intention For</th>
        <td class="text-center">{{$bodyContent['intentionfor']}}</td>
        <tr>
        </tr>
        <tr>
        <th class="bg-info" align="left">Amount</th>
        <td class="text-center">{{$bodyContent['amt']}}</td>
        </tr>

        <tr>
        <th class="bg-info" align="left">Payment Status</th>
        <td class="text-center">{{$bodyContent['desc']}}</td>
        </tr>

        <tr>
        <th class="bg-info" align="left">Payment Status</th>
        <td class="text-center">{{$bodyContent['content']}}</td>
        </tr>
        </thead>
    </table>
    <br>
     <!-- <h3>Your Mass  will be booked.</h3><br> -->
        <!-- <p>Thank you for your Massbooking.</p> -->
        <p> 
            <a href="http://127.0.0.1:3000/" target="_blank">Click to view the Massbooking website</a>
            </p>
             <p style="font-size: 12px;">Thank you,<br/><b>St.Mary's Basilica Church,</b><br/>Msgr. F. Noronha Road,</br>Shivajinagar,</br>Bangalore – 560 051,</br>Tamil Nadu – India.
            </p>
            </td>
            </tr>
        </tbody>
    </table>
</body>