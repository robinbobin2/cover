<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/fontfaceobserver/2.0.13/fontfaceobserver.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Alegreya+SC:400,400i,700,700i|Alegreya+Sans+SC:300,300i,400,400i,700,700i|Alegreya+Sans:300,300i,400,400i,500i,700,700i|Alegreya:400,400i,700,700i|Alice|Amatic+SC:400,700|Andika|Anonymous+Pro:400,400i,700,700i|Arimo:400,400i,700,700i|Arsenal:400,400i,700,700i|Bad+Script|Caveat:400,700|Comfortaa:300,400,700|Cormorant+Garamond:300,300i,400,400i,500,500i,700,700i|Cormorant+Infant:300,300i,400,400i,700,700i|Cormorant+SC:300,400,700|Cormorant+Unicase:300,400,700|Cormorant:300,300i,400,400i,700,700i|Cousine:400,400i,700,700i|Cuprum:400,400i,700,700i|Didact+Gothic|EB+Garamond:400,400i,700,700i|El+Messiri:400,700|Exo+2:300,300i,400,400i,700,700i|Fira+Mono:400,700|Fira+Sans+Condensed:300,300i,400,400i,700,700i|Fira+Sans+Extra+Condensed:300,300i,400,400i,700,700i|Fira+Sans:300,300i,400,400i,700,700i|Forum|Gabriela|IBM+Plex+Mono:300,300i,400,400i,700,700i|IBM+Plex+Sans:300,300i,400,400i,700,700i|IBM+Plex+Serif:300,300i,400,400i,700,700i|Istok+Web:400,400i,700,700i|Jura:300,400,500,700|Kelly+Slab|Kurale|Ledger|Lobster|Lora:400,400i,700,700i|Marck+Script|Marmelad|Merriweather:300,300i,400,400i,700,700i|Montserrat+Alternates:300,300i,400,400i,700,700i|Montserrat:300,300i,400,400i,500,500i,700,700i|Neucha|Noto+Sans:400,400i,700,700i|Noto+Serif:400,400i,700,700i|Old+Standard+TT:400,400i,700|Open+Sans+Condensed:300,300i,700|Open+Sans:300,300i,400,400i,700,700i|Oranienbaum|Oswald:300,400,700|PT+Mono|PT+Sans+Caption:400,700|PT+Sans+Narrow:400,700|PT+Sans:400,400i,700,700i|PT+Serif+Caption:400,400i|PT+Serif:400,400i,700,700i|Pacifico|Pangolin|Pattaya|Philosopher:400,400i,700,700i|Play:400,700|Playfair+Display+SC:400,400i,700,700i|Playfair+Display:400,400i,700,700i|Podkova:400,700|Poiret+One|Prata|Press+Start+2P|Prosto+One|Roboto+Condensed:300,300i,400,400i,700,700i|Roboto+Mono:300,300i,400,400i,700,700i|Roboto+Slab:300,400,700|Roboto:300,300i,400,400i,700,700i|Rubik+Mono+One|Rubik:300,300i,400,400i,700,700i|Ruslan+Display|Russo+One|Scada:400,400i,700,700i|Seymour+One|Source+Sans+Pro:300,300i,400,400i,700,700i|Spectral+SC:300,300i,400,400i,700,700i|Spectral:300,300i,400,400i,700,700i|Stalinist+One|Tenor+Sans|Tinos:400,400i,700,700i|Ubuntu+Condensed|Ubuntu+Mono:400,700,700i|Ubuntu:300,300i,400,400i,700,700i|Underdog|Vollkorn+SC:400,700|Vollkorn:400,400i,700,700i|Yanone+Kaffeesatz:300,400,700|Yeseva+One&amp;subset=cyrillic,cyrillic-ext" rel="stylesheet">

    <script src="{{URL::asset('js/fabric.js')}}"></script>

    <title></title>

    <style>
        html {
            width: 100%;
            height: 100%;
        }
        
        body {
            width: 100%;
            height: 100%;
            overflow: hidden;
        }
        
        .sidenav {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #111;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
        }
        
        .sidenav a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 25px;
            color: #818181;
            display: block;
            transition: 0.3s;
        }
        
        .sidenav a:hover {
            color: #f1f1f1;
        }
        
        .sidenav .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
        }
        
        .menu {
            width: 70px;
            height: 70px;
            text-align: center;
            font-size: 22px;
            float: left;
            line-height: 70px;
        }
        
        .menu:hover {
            cursor: pointer;
        }
        
        #main {
            transition: margin-left .5s;
            position: relative;
            width: 100%;
            height: 100%;
        }
        
        @media screen and (max-height: 450px) {
            .sidenav {
                padding-top: 15px;
            }
            .sidenav a {
                font-size: 18px;
            }
        }
        
        .canvas-container {
            width: 1590px;
            height: 450px;
            position: absolute;
            margin: auto;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            border-radius: 10px;
        }
        
        .top-toolbar {
            width: 1590px;
            height: 50px;
            float: left;
            margin-top: -50px;
        }
        
        .top-toolbar span {
            width: 50px;
            height: 50px;
            float: left;
            line-height: 50px;
            text-align: center;
        }
        
        .top-toolbar span:hover {
            cursor: pointer;
        }
        
        #canvas {
            border-radius: 5px;
            box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
        }
        
        .bottom-toolbar {
            width: 1590px;
            height: 60px;
            position: absolute;
            margin: auto;
            bottom: 0;
            left: 0;
            right: 0;
            line-height: 60px;
        }
        
        .bottom-toolbar span {
            width: 60px;
            height: 60px;
            float: left;
            line-height: 60px;
            text-align: center;
            font-size: 20px;
            background: #eee;
        }
        
        .bottom-toolbar span:hover {
            cursor: pointer;
        }
        
        .bottom-toolbar img {
            width: 60px;
            height: 60px;
        }
        
        input[type="color"] {
            -webkit-appearance: none;
            border: none;
            width: 26px;
            height: 24px;
            margin-top: 13px;
            background: #fff;
        }
        
        input[type="color"]::-webkit-color-swatch-wrapper {
            padding: 0;
        }
        
        input[type="color"]::-webkit-color-swatch {
            border: none;
            border-radius: 50%;
        }
    </style>

</head>

<body>

    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="#">About</a>
        <a href="#">Services</a>
        <a href="#">Clients</a>
        <a href="#">Contact</a>
    </div>

    <div id="main">

        <span class="menu" onclick="openNav()"><i class="fa fa-bars" aria-hidden="true"></i></span>

        <div class="canvas-container">
            <div class="top-toolbar">
                <div class="canvas-tools" style="width:530px;float:left;"><span><input id="colorWell" type="color" value="#000000"></span></div>
                <div class="text-tools" style="width:530px;float:left;">

                    <!--<span onclick=""><i class="fa fa-font" aria-hidden="true"></i></span>

                    <span onclick=""><i class="fa fa-italic" aria-hidden="true"></i></span>
                    <span onclick=""><i class="fa fa-bold" aria-hidden="true"></i></span>

                    <span onclick=""><i class="fa fa-align-left" aria-hidden="true"></i></span>
                    <span onclick=""><i class="fa fa-align-center" aria-hidden="true"></i></span>
                    <span onclick=""><i class="fa fa-align-right" aria-hidden="true"></i></span>-->

                </div>

                <div class="new-tools" style="width:530px;float:left;">
                    <select class="form-control" id="font-family"></select>
                </div>

            </div>
            <canvas id="canvas" width="1590px" height="400px"></canvas>
        </div>

        <div class="bottom-toolbar">

            <button type="button" id="add" class="btn btn-primary"><i class="fa fa-font" aria-hidden="true"></i> Добавить текст</button>

            <button type="button" id="add-clock" class="btn btn-primary"><i class="fa fa-clock-o" aria-hidden="true"></i> Добавить виджет времени</button>

            <button type="button" class="btn btn-primary">
                <label for="file" style="margin-bottom:0;"><i class="fa fa-file-image-o" aria-hidden="true"></i> Добавить изображение</label>
                <input type="file" id="file" style="display:none">
            </button>

            <button type="button" class="btn btn-primary" onclick="deleteObjects()"><i class="fa fa-trash-o" aria-hidden="true"></i> Удалить элемент</button>

            <button type="button" class="btn btn-primary" onclick="sendSelectedObjectToFront()"><i class="fa fa-arrow-up" aria-hidden="true"></i> На передний план</button>
            <button type="button" class="btn btn-primary" onclick="sendSelectedObjectBack()"><i class="fa fa-arrow-down" aria-hidden="true"></i> На задний план</button>
            <button type="button" id="btn_edit" class="btn btn-primary"> Сохранить шаблон </button>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script   src="https://code.jquery.com/jquery-3.3.1.min.js"   integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="   crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
        document.getElementById("main").style.marginLeft = "250px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("main").style.marginLeft = "0";
    }

    //Загрузка изображения

    var canvas = this.__canvas = new fabric.Canvas('canvas', {
        preserveObjectStacking: true,
        selection: true,
    })

    document.getElementById('file').addEventListener("change", function(e) {

        var file = e.target.files[0];
        var reader = new FileReader();

        reader.onload = function(f) {
            var data = f.target.result;
            fabric.Image.fromURL(data, function(img) {
                var oImg = img.set({
                    left: 0,
                    top: 0,
                    angle: 00
                }).scale(0.25);
                canvas.add(oImg).renderAll();
                var a = canvas.setActiveObject(oImg);
            });
        };

        reader.readAsDataURL(file);

    });

    //Загрузка изображения

    //Удаление выделенного объекта

    function deleteObjects() {
        var activeObject = canvas.getActiveObject();
        if (activeObject) {
            canvas.remove(activeObject);
        }
    };

    //Удаление выделенного объекта	

    //Управление слоями	

    var selectedObject;

    canvas.on('object:selected', function(event) {
        selectedObject = event.target;
        console.log(selectedObject);
    });

    var sendSelectedObjectBack = function() {
        canvas.sendToBack(selectedObject);
        canvas.discardActiveObject();
        canvas.renderAll();
    }

    var sendSelectedObjectToFront = function() {
        canvas.bringToFront(selectedObject);
        canvas.discardActiveObject();
        canvas.renderAll();
    }

    //Управление слоями	

    // 1. Создаём новый объект XMLHttpRequest
    var xhr = new XMLHttpRequest();

    // 2. Конфигурируем его: GET-запрос на URL 'phones.json'
    xhr.open('GET', 'http://worldclockapi.com/api/json/est/now', false);

    // 3. Отсылаем запрос
    xhr.send();

    // 4. Если код ответа сервера не 200, то это ошибка
    if (xhr.status != 200) {
        // обработать ошибку
        alert(xhr.status + ': ' + xhr.statusText); // пример вывода: 404: Not Found
    } else {
        // вывести результат
        //alert( xhr.responseText ); // responseText -- текст ответа.
        console.log(xhr.responseText);
        console.log(JSON.parse(xhr.responseText).currentDateTime);

    }

    $('#add-clock').click(function() {

        var clock = new fabric.Textbox(JSON.parse(xhr.responseText).currentDateTime, {
            left: 100,
            top: 100,
            height: 100,
        });

        canvas.add(clock);
    });

    //Добавление текста	

    var appObject = function() {

        return {
            __canvas: canvas,
            __tmpgroup: {},

            addText: function() {
                var newID = (new Date()).getTime().toString().substr(5);
                var text = new fabric.IText("Lorum ipsum dolor sit amet", {
                    fontFamily: 'Times New Roman',
                    left: 100,
                    top: 100,
                    myid: newID,
                    objecttype: 'text'
                });

                this.__canvas.add(text);
                this.addLayer(newID, 'text');
                this.__canvas.renderAll();
            },
            setTextParam: function(param, value) {
                var obj = this.__canvas.getActiveObject();
                if (obj) {
                    if (param == 'colori') {
                        obj.setColor(value);
                    } else {
                        obj.set(param, value);
                    }
                    this.__canvas.renderAll();
                }
            },
            setTextValue: function(value) {
                var obj = this.__canvas.getActiveObject();
                if (obj) {
                    obj.setText(value);
                    this.__canvas.renderAll();
                }
            },
            addLayer: function() {

            }

        };
    }

    $(document).ready(function() {

        var app = appObject();

        $('.font-change').change(function(event) {
            app.setTextParam($(this).data('type'), $(this).find('option:selected').val());
        });

        $('#add').click(function() {
            app.addText();
        });
        $('#text-cont').keyup(function() {
            app.setTextValue($(this).val());
        })

    });

    // Define an array with all fonts
    var fonts = ["Roboto", "Alegreya", "Quicksand", "Inconsolata"];

    var textbox = new fabric.Textbox('Lorum ipsum dolor sit amet', {
        left: 50,
        top: 50,
        width: 150,
        fontSize: 20
    });
    canvas.add(textbox).setActiveObject(textbox);
    fonts.unshift('Times New Roman');
    // Populate the fontFamily select
    var select = document.getElementById("font-family");
    fonts.forEach(function(font) {

        var option = document.createElement('option');
        option.innerHTML = font;
        option.value = font;
        option.style.fontFamily = font;
        select.appendChild(option);

        //select.innerHTML+="<option style="'font-family:'+font+'" value='+font+'>'+font+'</option>";

    });

    // Apply selected font on change
    document.getElementById('font-family').onchange = function() {
        if (this.value !== 'Times New Roman') {
            loadAndUse(this.value);
        } else {
            canvas.getActiveObject().set("fontFamily", this.value);
            canvas.requestRenderAll();
        }
    };

    function loadAndUse(font) {
        var myfont = new FontFaceObserver(font)
        myfont.load()
            .then(function() {
                // when font is loaded, use it.
                canvas.getActiveObject().set("fontFamily", font);
                canvas.requestRenderAll();
            }).catch(function(e) {
                console.log(e)
                alert('font loading failed ' + font);
            });
    }

    //Добавление текста	

    window.addEventListener("load", startup, false);

    function startup() {
        colorWell = document.querySelector("#colorWell");
        colorWell.addEventListener("input", updateFirst, false);
        colorWell.addEventListener("change", updateAll, false);
        colorWell.select();

    }

    function updateFirst(event) {
        canvas.getActiveObject().setColor(colorWell.value);
        canvas.renderAll();
    }

    function updateAll(event) {
        canvas.getActiveObject().setColor(event.target.value);
        canvas.renderAll();
    }

    $('#btn_edit').click(function() {
        //var canvas_ = new fabric.Canvas('canvas');
        console.log('Click Edit');

        //JSON DATA   
        var json_data = JSON.stringify(canvas.toDatalessJSON());
        console.log(json_data);

        $.ajax({
          type: "POST",
          url: "http://localhost:3000",
          contentType: "application/json; charset=utf-8",
          data: json_data,
          success: console.log('success'),
          dataType: "json"
        });
        //LOAD JSON DATA

        canvas.loadFromJSON(JSON.parse(json_data), function(obj) {
            canvas.renderAll();
            console.log(' this is a callback. invoked when canvas is loaded!xxx ');

            canvas.forEachObject(function(obj) {
                console.log(obj.name);
            });

        });

        canvas.loadFromJSON(json_data, function() {
            canvas.renderAll();
        });

    });
</script>

</html>