<!DOCTYPE html>
<html>
	
	<head>
		<meta charset="utf-8">
		 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">     
	</head>
	
	<body>
        <div class="col-6-md" style="background-color: #007bff; color: #ffffff; padding-top: 5px; padding-bottom: 5px; padding-left: 10px; font-size: 18px; margin-top: 20px;">
            <font face="verdana" size="2px">Par Jūsu pasūtījumu SANEL | Pasūtījuma nr. {{ $order->order_nr }}</font>
        </div>
            
        <div style="margin-top: 25px; margin-bottom: 25px; border: 1px solid #afafaf; padding: 20px;">
             <p>Lūdzu sekojat šai saitei, lai uzzinātu par pasūtīto preču pieejamību: <a href="http://blic.test//orders/requestpayment/{{$order->id}}">Preču saraksts</a></p>
             <p style="font-size: 12px;">Jautājumu gadījumā lūdzam sazināties zvanot pa talr. 27887888 vai rakstot uz info@sanel.lv</p> 
        </div>
        
        <div style="font-size: 14px; padding-left: 20px;">
           <p>Ar cieņu, SANEL.LV</p>
           <p>SIA FKMD Elektro</p>
           <p>Zemitāna iela 9, K-3, Rīga</p>
        </div>
            
	</body>
    

</html>