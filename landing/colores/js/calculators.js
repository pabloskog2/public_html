$( document ).ready(function() {
 
    
    var xmlhttp = new XMLHttpRequest();

xmlhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
    
    UF = this.responseText;
  }
};
xmlhttp.open("GET", "./valor_uf.php", true);
xmlhttp.send();
    
    
    
    
    
   
    function eChilean(x){
        return x.toLocaleString('es-CL');
    }
    $('input[type="range"]').rangeslider({
        polyfill: false,
        rangeClass: 'rangeslider',
        disabledClass: 'rangeslider--disabled',
        horizontalClass: 'rangeslider--horizontal',
        verticalClass: 'rangeslider--vertical',
        fillClass: 'rangeslider__fill',
        handleClass: 'rangeslider__handle',

        // Callback function
        onInit: function() {
        var idHtmlValue = $(this)[0].$element.context.attributes.data_value_id.nodeValue;
        var initValue = $(this)[0].$element.context.attributes.value.nodeValue;
            $("#"+idHtmlValue).html(eChilean(parseInt(initValue)));
            
           
            
            
        },

        // Callback function
        onSlide: function(position, value) {
            
            console.log("posicion: " + position + " " + "valor: " + value  );
            var idHtmlValue = $(this)[0].$element.context.attributes.data_value_id.nodeValue;
            $("#"+idHtmlValue).html(eChilean(value));
            if(idHtmlValue == 'profit_term_value' || idHtmlValue == 'profit_interest_value'  || idHtmlValue == 'profit_credit_value'|| idHtmlValue == 'profit_porc_value'){
                // CALCULATOR PROFIT
                // Validate all inputs data is not 0
                if ( $("input[name='profit_credit']").val() != 0 && $("input[name='profit_term']").val() != 0 && $("input[name='profit_porc']").val() != 0 && $("input[name='profit_interest']").val() != 0 ){
                    var monto = $("input[name='profit_credit']").val();
					
					//fucniones de pie
					var valor_modelo = monto*UF;
                    var pie_porcentaje = $("input[name='profit_porc']").val();
                    var pie_a = ((monto*pie_porcentaje)/100);
                    var pie = Math.round(pie_a*UF);
                    //var pie = ((valor_modelo*pie_porcentaje)/100);
 		
					var monto_final = Math.round(monto - pie_a);
					
                 
					//funciones de dividendo
                    var tasa = Math.pow(1+$("input[name='profit_interest']").val()/100,1/12);
                    var plazo =$("input[name='profit_term']").val()*12;
                    var resultado = Math.round((monto_final*((tasa-1)/(1-(Math.pow(tasa, plazo*-1)))))*UF);
                    console.log(resultado);
					
					
                    $("#profit_amount").html("<strong>$</strong> "+ resultado.toLocaleString('es'));
                    $("#profiPie").html("<strong>$</strong> "+ pie.toLocaleString('es'));
                    $("#profitPiePorcentaje").html($("input[name='profit_porc']").val());
                    $("#profitYears").html($("input[name='profit_term']").val());
                    $("#profitRate").html($("input[name='profit_interest']").val());
                    $("#profit_calculated").removeClass("hide"); 
					


                }else{
                    $("#profit_calculated").addClass("hide");
                }
            }
            if(idHtmlValue == 'property_term_value' || idHtmlValue == 'property_interest_value'  || idHtmlValue == 'property_credit_value'){
             // CALCULATOR PROPERTY
                // Validate all inputs data is not 0
                if ( $("input[name='property_value']").val() != 0 && $("input[name='property_term']").val() != 0 && $("input[name='property_interest']").val() != 0 ){
                    var dividendo = $("input[name='property_value']").val()/UF;
                    var tasa2 = Math.pow(1+$("input[name='property_interest']").val()/100,1/12);
                    var plazo2 = $("input[name='property_term']").val()*12;
                    var resultado2 = Math.round(dividendo*(1-(Math.pow(tasa2, plazo2*-1)))/(tasa2-1));
                    var pv= $("input[name='property_value']").val();
                    console.log(resultado2);
                    $("#property_amount").html("<strong>UF</strong> "+ resultado2.toLocaleString('es'));
                    $("#propertyAmount").html("$"+ Number(pv).toLocaleString('es'));
                    $("#propertyYears").html($("input[name='property_term']").val());
                    $("#profitRate2").html($("input[name='property_interest']").val() + "%");
                    $("#property_calculated").removeClass("hide");
                }else{
                    $("#property_calculated").addClass("hide");
                }
            }
        },

        // Callback function
        onSlideEnd: function(position, value) {

        }
    });
});