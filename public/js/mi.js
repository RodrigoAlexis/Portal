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


    //Crear el slug
    function crearURL(str) {
        
        str = str.replace(/^\s+|\s+$/g, ""); // trim
        str = str.toLowerCase();

        // remove accents, swap ñ for n, etc
        var from = "åàáãäâèéëêìíïîòóöôùúüûñç·/_,:;";
        var to = "aaaaaaeeeeiiiioooouuuunc------";

        for (var i = 0, l = from.length; i < l; i++) {
            str = str.replace(new RegExp(from.charAt(i), "g"), to.charAt(i));
        }

        str = str
            .replace(/[^a-z0-9 -]/g, "") // remove invalid chars
            .replace(/\s+/g, "-") // collapse whitespace and replace by -
            .replace(/-+/g, "-") // collapse dashes
            .replace(/^-+/, "") // trim - from start of text
            .replace(/-+$/, ""); // trim - from end of text

        var input = document.getElementById('slug');
            input.value = str;  
      }

    // CKeditor5 textareas para crear un post
    ClassicEditor
        .create( document.querySelector( '#stract' ) )
        .catch( error => {
            console.error( error );
    } );

    ClassicEditor
        .create( document.querySelector( '#body' ) )
        .catch( error => {
            console.error( error );
    } );

    //Cambiar imagen al crear un post
    document.getElementById("file").addEventListener('change', cambiarImagenPost);

    function cambiarImagenPost(event){
        var file = event.target.files[0];

        var reader = new FileReader();
        reader.onload = (event) => {
            document.getElementById("picture").setAttribute('src', event.target.result);
        };

        reader.readAsDataURL(file);
    }