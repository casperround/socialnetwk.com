

<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">


    <title>CodePen - Toggle Buttons</title>
    
    
    
    <link rel='stylesheet prefetch' href='http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css'>

        <style>
      *, *:after, *:before {
  box-sizing: border-box;
}

body {
  text-align: center;
  background: #eee;
}

section {
  float: left;
  min-width: 150px;
  width: 33.33%;
  padding: 25px 0;
  min-height: 100px;
}

/*=====================*/
.checkbox {
  position: relative;
  display: inline-block;
}
.checkbox:after, .checkbox:before {
  font-family: FontAwesome;
  -webkit-font-feature-settings: normal;
          font-feature-settings: normal;
  -webkit-font-kerning: auto;
          font-kerning: auto;
  -webkit-font-language-override: normal;
          font-language-override: normal;
  font-stretch: normal;
  font-style: normal;
  font-synthesis: weight style;
  font-variant: normal;
  font-weight: normal;
  text-rendering: auto;
}
.checkbox label {
  width: 90px;
  height: 42px;
  background: #ccc;
  position: relative;
  display: inline-block;
  border-radius: 46px;
  -webkit-transition: 0.4s;
  transition: 0.4s;
}
.checkbox label:after {
  content: '';
  position: absolute;
  width: 50px;
  height: 50px;
  border-radius: 100%;
  left: 0;
  top: -5px;
  z-index: 2;
  background: #fff;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
  -webkit-transition: 0.4s;
  transition: 0.4s;
}
.checkbox input {
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  z-index: 5;
  opacity: 0;
  cursor: pointer;
}
.checkbox input:hover + label:after {
  box-shadow: 0 2px 15px 0 rgba(0, 0, 0, 0.2), 0 3px 8px 0 rgba(0, 0, 0, 0.15);
}
.checkbox input:checked + label:after {
  left: 40px;
}


.model-13 .checkbox:after {
  content: 'OFF';
  font-family: Arial;
  position: absolute;
  color: #666;
  top: 12px;
  right: 15px;
}
.model-13 .checkbox label {
  background: none;
  border: 3px solid #777;
  height: 40px;
  border-radius: 20px;
}
.model-13 .checkbox label:after {
  content: 'ON';
  font-family: Arial;
  color: #fff;
  line-height: 28px;
  text-indent: 100px;
  background: #777;
  overflow: hidden;
  box-shadow: none;
  border-radius: 14px;
  -webkit-transform: translateX(-50px);
  transform: translateX(-50px);
  -moz-transition: all 0.4s 0.2s, width 0.2s linear, text-indent 0.4s linear;
  -o-transition: all 0.4s 0.2s, width 0.2s linear, text-indent 0.4s linear;
  -webkit-transition: all 0.4s, width 0.2s linear, text-indent 0.4s linear;
  -webkit-transition-delay: 0.2s, 0s, 0s;
  -webkit-transition: all 0.4s 0.2s, width 0.2s linear, text-indent 0.4s linear;
  transition: all 0.4s 0.2s, width 0.2s linear, text-indent 0.4s linear;
  top: 3px;
  left: auto;
  right: 2px;
  width: 28px;
  height: 28px;
}
.model-13 .checkbox input:checked + label {
  border-color: #329043;
}
.model-13 .checkbox input:checked + label:after {
  background: #3fb454;
  left: auto;
  -webkit-transform: translateX(0px);
  transform: translateX(0px);
  -moz-transition: all 0.4s, width 0.2s linear 0.4s, text-indent 0.3s linear 0.4s;
  -o-transition: all 0.4s, width 0.2s linear 0.4s, text-indent 0.3s linear 0.4s;
  -webkit-transition: all 0.4s, width 0.2s linear, text-indent 0.3s linear;
  -webkit-transition-delay: 0s, 0.4s, 0.4s;
  -webkit-transition: all 0.4s, width 0.2s linear 0.4s, text-indent 0.3s linear 0.4s;
  transition: all 0.4s, width 0.2s linear 0.4s, text-indent 0.3s linear 0.4s;
  width: 80px;
  text-indent: 0;
}


    </style>

    
    
    
  </head>


<section class="model-13">
  <div class="checkbox">
    <input type="checkbox"/>
    <label></label>
  </div></section>

    

