Array ( [0] => 18 [id] => 18 
		        [1] => Tapas with Bacon [name] => Tapas with Bacon 
		        [2] => 10 [value] => 10 
		        [3] => 150 [weight] => 150 )

		        <div class="block-product-right-title__name whitecolor fontSans size22px"><a href="cart.php">КОРЗИНА</a></div></div>
				        <div class="block-product-right-title__name whitecolor fontSans size22px">'.$select_c.'</div></div>
    <br />
       <input type="text" id="test1" />
    <div class="wrap-button-minus"><button class="button-minus button-plus ui-n3" type="button" tabindex="0"><div class="button-minus-border button-plus" tabindex="-1"><a href="#" onclick="getInput('test1')"><svg width="24" height="24" class="ui-m9"><path d="M13 11h7a1 1 0 010 2h-7v7a1 1 0 01-2 0v-7H4a1 1 0 010-2h7V4a1 1 0 012 0v7z" fill="#f2f3f5">
				        						</path></svg></a></div></button></div>                                                                                                  
    

    Тут выводим результат
    
    <script>
        var answer = document.getElementById('answer');
        function getInput(inputId) {
            var element = document.getElementById(inputId);
            answer.innerText = element.value;
        }
    </script>     
        
       
        
        <script src="js/menu.js"></script>
    
	
    </body>
</html>
print_r($info);