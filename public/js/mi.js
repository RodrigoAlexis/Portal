let Password = {

 
    _pattern : /[a-zA-Z0-9_\-\+\.]/,
    
    
    _getRandomByte : function()
    {
    // http://caniuse.com/#feat=getrandomvalues
    if(window.crypto && window.crypto.getRandomValues) 
    {
        var result = new Uint8Array(1);
        window.crypto.getRandomValues(result);
        return result[0];
    }
    else if(window.msCrypto && window.msCrypto.getRandomValues) 
    {
        var result = new Uint8Array(1);
        window.msCrypto.getRandomValues(result);
        return result[0];
    }
    else
    {
        return Math.floor(Math.random() * 256);
    }
    },
    
    generate : function(length)
    {
    return Array.apply(null, {'length': length})
        .map(function()
        {
        var result;
        while(true) 
        {
            result = String.fromCharCode(this._getRandomByte());
            if(this._pattern.test(result))
            {
            return result;
            }
        }        
        }, this)
        .join('');  
    }    
    
    };

    //Cerrar alerta al ingresar al dashboard
    function closeAlert(event){
        let element = event.target;
        while(element.nodeName !== "BUTTON"){
          element = element.parentNode;
        }
        element.parentNode.parentNode.removeChild(element.parentNode);
      }


      const tableConfig = {
        tableCellProperties: {
            borderColors: [
                {
                    color: 'hsl(0, 0%, 90%)',
                    label: 'Light grey'
                },
                // ...
            ],
            backgroundColors: [
                {
                    color: 'hsl(120, 75%, 60%)',
                    label: 'Green'
                },
                // ...
            ]
        }
    };


    


    