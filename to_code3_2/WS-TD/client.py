from zeep import Client

client = Client('http://localhost/to_code3_2/WS-TD/wstd_service.php?wsdl')
print(client.service['get_information']('US','CountryIntPhoneCode'))
print(client.service.get_information('TN','CapitalCity'))