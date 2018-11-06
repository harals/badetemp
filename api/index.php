<html>

   <head>
      <title>norway/hovik/sea/temperature</title>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/paho-mqtt/1.0.1/mqttws31.js" type="text/javascript">
	 </script>
	 <script type = "text/javascript" language = "javascript">
		var mqtt;
		var reconnectTimeout = 2000;
		var host="test.mosquitto.org";
		var port=8081;

		function onFailure(message) {
			console.log("Connection Attempt to Host "+host+"Failed");
			setTimeout(MQTTconnect, reconnectTimeout);
        }
		function onMessageArrived(r_message){
		out_msg="<b>"+r_message.payloadString+"</b><br>";
		try{
			document.getElementById("out_messages").innerHTML+=out_msg;
		}
		catch(err){
		document.getElementById("out_messages").innerHTML=err.message;
		}
		}

		function onConnect() {
		console.log("Connected ");
		mqtt.subscribe("norway/hovik/sea/temperature");
		}
		function MQTTconnect() {
		console.log("connecting to "+ host +" "+ port);
		mqtt = new Paho.MQTT.Client(host,port,"clientjs");
		var options = {
			timeout: 3,
			useSSL: true,
			onSuccess: onConnect,
			onFailure: onFailure,
			 };
		mqtt.onMessageArrived = onMessageArrived

		mqtt.connect(options); //connect
		}

	MQTTconnect();
	</script>

	<div id="out_messages">
	</div>

	<noscript>Kunne ikke kjøre javascript. Sannsynligvis ble dette blokkert av nettleseren din.</noscript>

   </body>
</html>
