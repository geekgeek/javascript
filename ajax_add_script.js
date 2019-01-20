      $(document).ready(function(){
        var data = $.parseJSON($.ajax({
            url:  'http://localhost:9999/readdirectory',
            dataType: "json", 
            async: false
        }).responseText); // This will wait until you get a response from the ajax request.
    
        // data under
        
        var myStringArray = data;
        var arrayLength = myStringArray.length;

        for (var i = 0; i < arrayLength; i++) {
          var thevalue = myStringArray[i];

          console.log(thevalue);
          
          var g = document.createElement('script');
          var s = document.getElementsByTagName('script')[0];
          g.src = "/usr_file_writes/" + thevalue;
          s.parentNode.insertBefore(g, s);
        }


    });
