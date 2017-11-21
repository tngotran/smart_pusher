#include <ESP8266WiFi.h>
#include <Wire.h>
#include <PubSubClient.h>
  //
  #define wifi_ssid "aka3"
  #define wifi_password "aka00001234"

#define mqtt_server "192.168.0.117"
// #define mqtt_server "192.168.0.15"
#define mqtt_user "pusher"
#define mqtt_password "1"

// #define humidity_topic "test"
char* topic = "test";
// the IP address for the shield:
// IPAddress ip(192, 168, 0, 177);

// char ssid[] = "aka3";    // your network SSID (name)
// char pass[] = "aka00001234"; // your network password (use for WPA, or use as key for WEP)


WiFiClient espClient;
PubSubClient client(espClient);

void setup() {
  Serial.begin(115200);
  setup_wifi();
  client.setServer(mqtt_server, 1883);
  client.setCallback(callback);
}

void setup_wifi() {
  delay(10);
  // We start by connecting to a WiFi network
  Serial.println();
  Serial.print("Connecting to ");
  Serial.println(wifi_ssid);


  // IPAddress ip(10, 0, 0, 83);
  // IPAddress gateway(10, 0, 0, 1);
  // IPAddress subnet(255, 255, 255, 0);
  // IPAddress dns(8,8,8,8);
  // //
  // // // Static IP Setup Info Here...
  // WiFi.config(ip, dns, gateway, subnet); //If you need Internet Access You should Add DNS also...
  // // WiFi.config(ip, dns); //If you need Internet Access You should Add DNS also...
  // WiFi.mode(WIFI_STA);
  WiFi.begin(wifi_ssid, wifi_password);



  // WiFi.config(ip);
  // int status = WL_IDLE_STATUS;
  //
  //   // attempt to connect to Wifi network:
  //   while ( status != WL_CONNECTED) {
  //     Serial.print("Attempting to connect to SSID: ");
  //     Serial.println(ssid);
  //     // Connect to WPA/WPA2 network. Change this line if using open or WEP network:
  //       status = WiFi.begin(ssid, pass);
  //
  //     // wait 10 seconds for connection:
  //     delay(5000);
  //   }



  while (WiFi.status() != WL_CONNECTED) {
    delay(500);
    Serial.print(".");
  }

  Serial.println("");
  Serial.println("WiFi connected");
  Serial.println("IP address: ");
  Serial.println(WiFi.localIP());
}

void callback(char* topic, byte* payload, unsigned int length) {
 Serial.print("Message arrived [");
 Serial.print(topic);
 Serial.print("] ");
 for (int i=0;i<length;i++) {
  char receivedChar = (char)payload[i];
  Serial.print(receivedChar);
  if (receivedChar == '0'){
  // digitalWrite(ledPin, HIGH);
  Serial.println("rece 0");
  }
  if (receivedChar == '1'){
    Serial.println("rece1");
    // digitalWrite(ledPin, LOW);
  }
  }
  Serial.println();
}


void reconnect() {
  // Loop until we're reconnected
  while (!client.connected()) {
    Serial.print("Attempting MQTT connection...");
    // Attempt to connect
    // If you do not want to use a username and password, change next line to
    // if (client.connect("ESP8266Client")) {
    if (client.connect("ESP8266Client", mqtt_user, mqtt_password)) {
      Serial.println("connected");
      client.subscribe("test");
    } else {
      Serial.print("failed, rc=");
      Serial.print(client.state());
      Serial.println(" try again in 5 seconds");
      // Wait 5 seconds before retrying
      delay(5000);
    }
  }
}


void loop() {
  if (!client.connected()) {
    reconnect();
  }
  client.loop();
}
