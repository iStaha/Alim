<!-- <h2>Message</h2>
</div>
Hello Mr Manager,<br> This is message from new Client who has to say something.<br> Name: {{ $name }}<br> Email: {{ $email }}<br> Messagge: {{ $info }}<br>

 -->
<!DOCTYPE html>
<html>

<head>
	<title></title>
</head>

<body style="background: rgba(0,0,0,0.1);">


	<table style="table-layout: auto; width: 100%; border: none;" border="0" cellspacing="0" cellpadding="0">
		<tbody>

			<tr>
				<td colspan="100">
					<div style="margin-left: auto; margin-right: auto; width: 200px;"> <img src="{{ $message->embed(public_path() . '/images/ilm.png') }}"> </div>
				</td>
			</tr>

			<tr colspan="100">
				<td style="padding: 10px;">
					<div style="margin-left: auto; margin-right: auto; width: 600px;">This is message from new Client who has to say something. </div>
				</td>
			</tr>
			<tr colspan="100">
				<td style="padding: 10px;">
					<div style="margin-left: auto; margin-right: auto; width: 600px;">Name: {{ $name }} </div>
				</td>
			</tr>
			<tr colspan="100">
				<td style="padding: 10px;">
					<div style="margin-left: auto; margin-right: auto; width: 600px;">Email: {{ $email }} </div>
				</td>
			</tr>
			<tr colspan="100">
				<td style="padding: 10px;">
					<div style="margin-left: auto; margin-right: auto; width: 600px;    margin-bottom: 100px;">Message: {{ $info }} </div>
				</td>
			</tr>
			<tfoot style="margin-top: 100px; background: #af8f0f;    color: #FFF;">
				<tr>
					<td colspan="100" style="padding: 10px;">
						<div style="margin-left: auto; margin-right: auto; width: 730px;color: #FFF;"> Address: Abc, xyz street London, HG521A </div>
				</tr>

				<tr>
					<td colspan="100" style="padding: 10px;">
						<div style="margin-left: auto; margin-right: auto; width: 730px; color: #FFF;"> Phone: 0800 - 1234 - 562 - 6</div>
				</tr>
				<tr>
					<td colspan="100" style="padding: 10px;">
						<div style="margin-left: auto; margin-right: auto; width: 730px; color: #FFF;"> Email: ilm@ilm.com </div>
				</tr>
			</tfoot>
		</tbody>
	</table>


</body>

</html>
