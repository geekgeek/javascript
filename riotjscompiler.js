riot.tag2('ricompi', '<div id="mainHolder"> <h1>Riot JS Tag Compiler</h1> <div id="output1"></div> <textarea id="textarea1" placeholder="input"></textarea><br> <textarea id="textarea2"></textarea><br> <button class="greenBtn" onclick="{UserAction}">compile</button> </div>', 'ricompi body,[data-is="ricompi"] body{ font-family: sans-serif; } ricompi textarea,[data-is="ricompi"] textarea{ height: 300px; width:100%; min-width: 100px; height:200px; } ricompi #textarea2,[data-is="ricompi"] #textarea2{ background-color:#F9F9F9; } ricompi #mainHolder,[data-is="ricompi"] #mainHolder{ margin-left: 10%; margin-right: 10%; padding-bottom: 6px; } ricompi #mainHolder h1,[data-is="ricompi"] #mainHolder h1{ color:white; background-color: #FF0044; padding:20px; } ricompi .greenBtn,[data-is="ricompi"] .greenBtn{ background-color: #4CAF50; border: none; color: white; padding: 3px 7px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; border:1px solid black; }', '', function(opts) {
        this.UserAction = function(e)
        {
            var box1 = document.getElementById("textarea1").value;
            var compiledTag = riot.compile(box1);
            document.getElementById("textarea2").innerHTML = compiledTag;
        }.bind(this)
});
