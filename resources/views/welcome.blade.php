<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/app.css">
        <h1>Laravel</h1>
    </head>
    <body>
         <div id="app">
<!--             <input type="text" :value="coupon" @input="coupon = $event.target.value">
-->               <coupon  v-model="coupon">  
         </div>

<!--         <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
 -->         <script src="https://unpkg.com/vue@2.1.6/dist/vue.js"></script>
         <script src="./js/app.js"></script>
     </body> 
</html>
