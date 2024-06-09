@extends('layout.user')
@section('title', 'BMI Calculator')


@section('css')
<style data-tag="reset-style-sheet">
      html {  line-height: 1.15;}body {  margin: 0;}* {  box-sizing: border-box;  border-width: 0;  border-style: solid;}p,li,ul,pre,div,h1,h2,h3,h4,h5,h6,figure,blockquote,figcaption {  margin: 0;  padding: 0;}button {  background-color: transparent;}button,input,optgroup,select,textarea {  font-family: inherit;  font-size: 100%;  line-height: 1.15;  margin: 0;}button,select {  text-transform: none;}button,[type="button"],[type="reset"],[type="submit"] {  -webkit-appearance: button;}button::-moz-focus-inner,[type="button"]::-moz-focus-inner,[type="reset"]::-moz-focus-inner,[type="submit"]::-moz-focus-inner {  border-style: none;  padding: 0;}button:-moz-focus,[type="button"]:-moz-focus,[type="reset"]:-moz-focus,[type="submit"]:-moz-focus {  outline: 1px dotted ButtonText;}a {  color: inherit;  text-decoration: inherit;}input {  padding: 2px 4px;}img {  display: block;}html { scroll-behavior: smooth  }
    </style>
    <style data-tag="default-style-sheet">
      html {
        font-family: Inter;
        font-size: 16px;
      }

      body {
        font-weight: 400;
        font-style:normal;
        text-decoration: none;
        text-transform: none;
        letter-spacing: normal;
        line-height: 1.15;
        color: var(--dl-color-theme-neutral-dark);
        background-color: var(--dl-color-theme-neutral-light);

        fill: var(--dl-color-theme-neutral-dark);
      }
    </style>
    <link
      rel="stylesheet"
      href="https://unpkg.com/animate.css@4.1.1/animate.css"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=STIX+Two+Text:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://unpkg.com/@teleporthq/teleport-custom-scripts/dist/style.css"
    />
    <link rel="stylesheet" href="{{asset('css/bmi.css')}}">
    <link rel="stylesheet" href="{{asset('css/bmi2.css')}}">
    <style>
      .zero{
        padding:0;
        margin:0;
      }
    </style>
@endsection



@section('content')
<div>
      <div class="bmiman-container">
        <div class="bmiman-bmiman">
          <div class="bmiman-group7">
            <div class="bmiman-dark-mode">
              <div type="button">
                <div class="bmiman-calculate-button btn btn-primary align-items-center text-align-center justify-content-center" style="padding-top:10px" id = "bmi_button">
                  <p class="zero"><b>Calculate</b></p>
                </div>
              </div>
              <div class="badan-group71">
                <span class="badan-text10" id="badan-text10"><b><span> - </span></b></span>
                <span class="badan-text12">
                  <span>Body Mass Index (BMI)</span>
                </span>
                <div class="badan-frame1">
                  <span class="badan-text14" id="result_bmi"><b><span> - </span></b></span>
                </div>
                <div class="badan-group5">
                  <span class="badan-text16"><span>15</span></span>
                  <span class="badan-text18"><span>18.5</span></span>
                  <span class="badan-text20"><span>25</span></span>
                  <span class="badan-text22"><span>30</span></span>
                  <span class="badan-text24"><span>40</span></span>
                  <!-- <img
                    src="{{asset('bmi-img/rectangle81072-3g9p-200h.png')}}"
                    alt="Rectangle81072"
                    class="badan-rectangle8"
                  /> -->
                  <div class="badan-rectangle8">

                  </div>
                  <img
                    src="{{asset('bmi-img/rectangle91072-wr3n-200h.png')}}"
                    alt="Rectangle91072"
                    class="badan-rectangle9"
                    id="bmi_bar"
                  />
                </div>
              </div>     

            </div>
            <div class="bmiman-group237475">
              <div class="bmiman-group237472">
                <div class="bmiman-group237471">
                  <span class="bmiman-text12"><span>Weight</span></span>
                  <input
                    type="text"
                    id="weight"
                    name="Text_field_height"
                    required="true"
                    placeholder="0"
                    class="bmiman-weightinput input"
                  />
                </div>
                <div class="bmiman-group237473">
                  <span class="bmiman-text14"><span>Age</span></span>
                  <input
                    type="text"
                    id="age"
                    name="Text_field_height"
                    required="true"
                    placeholder="0"
                    class="bmiman-ageinput input"
                  />
                </div>
                <div class="bmiman-group2374731">
                  <span class="bmiman-text16">Height</span>
                  <input
                    type="text"
                    id="height"
                    name="Text_field_height"
                    required="true"
                    placeholder="0"
                    class="bmiman-heightinput input"
                  />
                </div>
              </div>
              <div class="bmiman-group237474">
                <span class="bmiman-text17"><span>40</span></span>
                <span class="bmiman-text19"><span>60</span></span>
                <span class="bmiman-text21"><span>80</span></span>
                <span class="bmiman-text23"><span>100</span></span>
                <span class="bmiman-text25"><span>120</span></span>
                <span class="bmiman-text27"><span>140</span></span>
                <span class="bmiman-text29"><span>160</span></span>
                <span class="bmiman-text31"><span>180</span></span>
                <span class="bmiman-text33">
                  <span>200</span>
                  <br />
                  <span></span>
                </span>
                <span class="bmiman-text37"><span>Height</span></span>
                <img
                  alt="Line42371"
                  src="{{asset('bmi-img/line42371-v04c.svg')}}"
                  class="bmiman-line4"
                />
                <img
                  alt="Line52371"
                  src="{{asset('bmi-img/line52371-19cn.svg')}}"
                  class="bmiman-line5"
                />
                <img
                  alt="Line62371"
                  src="{{asset('bmi-img/line62371-pp7n.svg')}}"
                  class="bmiman-line6"
                />
                <img
                  alt="Line72371"
                  src="{{asset('bmi-img/line72371-ccv.svg')}}"
                  class="bmiman-line7"
                />
                <img
                  alt="Line82371"
                  src="{{asset('bmi-img/line82371-tnb9.svg')}}"
                  class="bmiman-line8"
                />
                <img
                  alt="Line92371"
                  src="{{asset('bmi-img/line92371-byms.svg')}}"
                  class="bmiman-line9"
                />
                <img
                  alt="Line102371"
                  src="{{asset('bmi-img/line102371-p8tiw.svg')}}"
                  class="bmiman-line10"
                />
                <img
                  alt="Line112371"
                  src="{{asset('bmi-img/line112371-v1qj.svg')}}"
                  class="bmiman-line11"
                />
                <img
                  alt="Line122371"
                  src="{{asset('bmi-img/line122371-ew6r.svg')}}"
                  class="bmiman-line12"
                />
                <div class="bmiman-rectangle58">
                  <img
                    alt="Rectangle582371"
                    src="{{asset('bmi-img/rectangle582371-ows-200w.png')}}"
                    style="position:absolute"
                  />
                  <div id="barmeter"></div>
                </div>
              </div>
              <div class="bmiman-group237468">
                <div class="bmiman-oraang">
                  <div class="bmiman-group">
                    <div class="bmiman-male">
                      <div class="bmiman-mask7">
                        <img
                          alt="path2612371"
                          src="{{asset('bmi-img/path2612371-d9b8.svg')}}"
                          class="bmiman-path261"
                        />
                      </div>
                      <div class="bmiman-group15">
                        <div class="bmiman-group6">
                          <img
                            alt="Path742371"
                            src="{{asset('bmi-img/path742371-2eip.svg')}}"
                            class="bmiman-path74"
                          />
                          <img
                            alt="Path752371"
                            src="{{asset('bmi-img/path752371-6rxf.svg')}}"
                            class="bmiman-path75"
                          />
                          <img
                            alt="Path762371"
                            src="{{asset('bmi-img/path762371-i6n.svg')}}"
                            class="bmiman-path76"
                          />
                          <img
                            alt="Path272371"
                            src="{{asset('bmi-img/path272371-fkdi.svg')}}"
                            class="bmiman-path27"
                          />
                          <img
                            alt="Path72371"
                            src="{{asset('bmi-img/path72371-05e.svg')}}"
                            class="bmiman-path7"
                          />
                          <img
                            alt="Path282371"
                            src="{{asset('bmi-img/path282371-uqee.svg')}}"
                            class="bmiman-path28"
                          />
                          <img
                            alt="Path242371"
                            src="{{asset('bmi-img/path242371-7fnb.svg')}}"
                            class="bmiman-path24"
                          />
                        </div>
                      </div>
                      <img
                        alt="Path352371"
                        src="{{asset('bmi-img/path352371-n6h5.svg')}}"
                        class="bmiman-path35"
                      />
                      <img
                        alt="Path382371"
                        src="{{asset('bmi-img/path382371-2sgs.svg')}}"
                        class="bmiman-path38"
                      />
                      <div class="bmiman-group1">
                        <img
                          alt="Path232371"
                          src="{{asset('bmi-img/path232371-84x.svg')}}"
                          class="bmiman-path23"
                        />
                        <img
                          alt="Path652371"
                          src="{{asset('bmi-img/path652371-o6z.svg')}}"
                          class="bmiman-path65"
                        />
                        <img
                          alt="Path82371"
                          src="{{asset('bmi-img/path82371-hky.svg')}}"
                          class="bmiman-path8"
                        />
                      </div>
                      <div class="bmiman-group21">
                        <img
                          alt="Path2322371"
                          src="{{asset('bmi-img/path2322371-9s3r.svg')}}"
                          class="bmiman-path232"
                        />
                        <img
                          alt="Path822371"
                          src="{{asset('bmi-img/path822371-grsg.svg')}}"
                          class="bmiman-path82"
                        />
                      </div>
                      <div class="bmiman-group71">
                        <img
                          alt="Path272371"
                          src="{{asset('bmi-img/path272371-c6mo.svg')}}"
                          class="bmiman-path271"
                        />
                        <img
                          alt="Path2722371"
                          src="{{asset('bmi-img/path2722371-g6a4.svg')}}"
                          class="bmiman-path272"
                        />
                        <img
                          alt="Path3522371"
                          src="{{asset('bmi-img/path3522371-ydj.svg')}}"
                          class="bmiman-path352"
                        />
                        <img
                          alt="Path3822371"
                          src="{{asset('bmi-img/path3822371-4bvh.svg')}}"
                          class="bmiman-path382"
                        />
                        <div class="bmiman-group59">
                          <img
                            alt="Fill572371"
                            src="{{asset('bmi-img/fill572371-c17a.svg')}}"
                            class="bmiman-fill57"
                          />
                          <img
                            alt="Path2371"
                            src="{{asset('bmi-img/path2371-ijdg.svg')}}"
                            class="bmiman-path"
                          />
                          <img
                            alt="Path92371"
                            src="{{asset('bmi-img/path92371-0r1w.svg')}}"
                            class="bmiman-path9"
                          />
                        </div>
                        <div class="bmiman-group5912-copy">
                          <img
                            alt="Fill5722371"
                            src="{{asset('bmi-img/fill5722371-jnd.svg')}}"
                            class="bmiman-fill572"
                          />
                          <img
                            alt="Path282371"
                            src="{{asset('bmi-img/path282371-iee9.svg')}}"
                            class="bmiman-path281"
                          />
                          <img
                            alt="Path922371"
                            src="{{asset('bmi-img/path922371-texth.svg')}}"
                            class="bmiman-path92"
                          />
                        </div>
                      </div>
                      <div class="bmiman-face">
                        <img
                          alt="Path182371"
                          src="{{asset('bmi-img/path182371-hbtb.svg')}}"
                          class="bmiman-path18"
                        />
                        <div class="bmiman-path3">
                          <div class="bmiman-mask8">
                            <img
                              alt="path1022371"
                              src="{{asset('bmi-img/path1022371-ovfk.svg')}}"
                              class="bmiman-path102"
                            />
                          </div>
                        </div>
                        <img
                          alt="Path412371"
                          src="{{asset('bmi-img/path412371-f8y8.svg')}}"
                          class="bmiman-path41"
                        />
                        <img
                          alt="Path422371"
                          src="{{asset('bmi-img/path422371-p33a.svg')}}"
                          class="bmiman-path42"
                        />
                        <img
                          alt="Path432371"
                          src="{{asset('bmi-img/path432371-jbir.svg')}}"
                          class="bmiman-path43"
                        />
                        <img
                          alt="Path442371"
                          src="{{asset('bmi-img/path442371-zwarj.svg')}}"
                          class="bmiman-path44"
                        />
                        <img
                          alt="Path292371"
                          src="{{asset('bmi-img/path292371-0zdb.svg')}}"
                          class="bmiman-path29"
                        />
                      </div>
                    </div>
                    <div class="bmiman-clothes">
                      <img
                        alt="Path42371"
                        src="{{asset('bmi-img/path42371-gxba.svg')}}"
                        class="bmiman-path4"
                      />
                      <img
                        alt="Path62371"
                        src="{{asset('bmi-img/path62371-pfp.svg')}}"
                        class="bmiman-path6"
                      />
                      <img
                        alt="Path42371"
                        src="{{asset('bmi-img/path42371-gxba.svg')}}"
                        class="bmiman-path4"
                      />
                      <img
                        alt="Path42371"
                        src="{{asset('bmi-img/path42371-gxba.svg')}}"
                        class="bmiman-path4"
                      />
                      <img
                        alt="Path62371"
                        src="{{asset('bmi-img/path62371-pfp.svg')}}"
                        class="bmiman-path6"
                      />
                    </div>
                  </div>

                  <img
                    alt="Vector2371"
                    src="{{asset('bmi-img/vector2371-5s2r.svg')}}"
                    class="bmiman-vector"
                  />
                </div>
              </div>
              <input
                type="text"
                placeholder="placeholder"
                class="bmiman-textinput input"
              />
            </div>
          </div>
          <span class="bmiman-text49"><span>Your BMI is</span></span>
          <div class="bmiman-group22 justify-content-center">
            <span class="bmiman-result-bmi text-align-center align-self-center" id="bmi_result"><span> - </span></span>

            <img
              alt="Ellipse52371"
              src="{{asset('bmi-img/ellipse52371-czjd-400h.png')}}"
              class="bmiman-ellipse51"
            />
          </div>
        </div>
      </div>
    </div>
@endsection



@section('js')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{asset('js/bmi.js')}}"></script>
@endsection