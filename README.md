# Noqod payment gateway integration guide
## Introduction
As the rapid growth of the e-commerce sector has been besieging the world especially after the recent global pandemic in 2020, the demanding need of the channels to elevate online payments and the processes is necessary. Since NOQOD has already set forward to revolutionise payment ecosystem in African Countries, the document specifies the online payment integration process that NOQOD will follow up with, in order to give the businesses an another product ready to implement as NOQOD payment gateway.
### Purpose of the document
The document is meant to specify the online payment integration process that you can follow for your business so that any customer can make their payments on your software through NOQOD Payment gateway.
### How the process works?
The process will follow like any other online payment option that starts from initialising transaction from a merchant window, redirecting to the NOQOD payment gateway and then back with success or failure
### Methods Supported
There are two methods availed through NOQOD payment gateway:
1.	Express payment (If the user is  non-NOQOD user)
2.	Pay via NOQOD (If the user is NOQOD user)

## 1. Pay using Express method
*The method is meant for the general audience that does not fall in the category of NOQOD users.  

*This is simply a guest payment type where any random user can make use of NOOQD payment platform while entering his payment details like card number and expiry date

*This type will act as the third party payment type for the payers where they can simply use the platform that shall be integrated with the NOQOD API

## 2. Pay using NOQOD
*The method is meant for the NOQOD users

*The process of accepting payments online through this method will go through the verification of the users (being NOQOD users)

*The process will have two cases, one if the payment is being done from the same device and the other if it is done from another

1. If payment is being made from different device, a dynamic QR will be generated for the user. The NOQOD user will scan this QR from NOQOD app and pay after choosing the card and entering the IPIN (as password). The user will be then navigated back to the original website.
2. If payment is being made from same device, the user will be availed to enter mobile number registered with NOQOD and do the payment with OTP verification

## Index guide for Integration
![image 1](https://user-images.githubusercontent.com/42232644/110445681-60364400-80e4-11eb-96b1-df1dce319a34.png)

## How to integrate?
As a business, you need to follow these steps for the integration process

### 1. Import 
Import a front-end library. This will contain a function called npg function. 

 <script src="https://cdn.jsdelivr.net/gh/NOQOD/payment-gateway-library@vversion-1/index.js
 </script>

This npg function will expect two params which being token and merchant id. 

#### Token Generation :
An identifier as described above will be generated with the following steps:

a. Visit the url https://npg.noqod.com.sd and sign in using your registered mobile number (Merchant Id) and password.

b. Navigate to Integration page in the portal.

c. Enter your server IP to whitelist it and generate your token.
### 2. Initialise params
The library contains the code that will first initialise token and merchant Id

let noqod = npg( "7006911868",  myToken  );

### 3. Create signature
After initialising the params, create a hash (signature) for the details:
1. 	Merchant id        2.	Amount         3.	   Order Id

let  signature = noqod.hashInfo( "7006911868", "550", "19012138137211" );

### 4. Send Payment request
Once the signature is created, payment request can be sent securely now. This request will contain following params: 
1.  	Amount         2.	   Order Id         3.	   CallbackUrl          4.	   Generated hash(signature)

noqod.sendRequest( "550", "19012138137211", "https://www.examplesite.com", signature);

### 5. NOQOD Payment gateway checkout
Once the request is sent, NOQOD Payment gateway will verify the hash and navigate the end user to checkout with the available payment methods of express payment or pay via NOQOD option as mentioned above. To follow with this process, API’s will hit on our backend to process the payment

### 6. Navigate Back
After the completion of payment process, user will be navigated back with params: 

1.   Order Id                2.	   Transaction Id            3.     Verified signature           4.     Order
![image 1](https://user-images.githubusercontent.com/42232644/110454405-333a5f00-80ed-11eb-949b-6ce29d712030.png)



