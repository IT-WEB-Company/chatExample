@extends('layouts.header')

@section('content')

    <div class="main-panel">
        <!-- BEGIN : Main Content-->
        <div class="main-content">
            <div class="content-wrapper"><section class="color-palette">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="content-header mb-3">Color Palette</div>
                        </div>
                    </div>
                    <!--App color starts-->
                    <div class="row app-color overflow-hidden">
                        <div class="color-group col-sm-4 mb-3">
                            <ul class="pl-0">
                                <li class="color main-color" style="background-color: #009DA0;">
                                    <span class="name light-strong">Primary</span>
                                    <span class="shade light-strong">500</span>
                                    <span class="hex light-strong">#009DA0</span>
                                </li>
                                <li class="color dark" style="background-color: #E0F3F4;"><span class="shade expanded">50</span><span class="hex">#E0F3F4</span></li>
                                <li class="color dark" style="background-color: #B3E2E3;"><span class="shade">100</span><span class="hex">#B3E2E3</span></li>
                                <li class="color dark" style="background-color: #80CED0;"><span class="shade expanded">200</span><span class="hex">#80CED0</span></li>
                                <li class="color dark" style="background-color: #4DBABD;"><span class="shade">300</span><span class="hex">#4DBABD</span></li>
                                <li class="color" style="background-color: #26ACAE;"><span class="shade expanded">400</span><span class="hex">#26ACAE</span></li>
                                <li class="color" style="background-color: #009DA0;"><span class="shade">500</span><span class="hex">#009DA0</span></li>
                                <li class="color" style="background-color: #009598;"><span class="shade expanded">600</span><span class="hex">#009598</span></li>
                                <li class="color" style="background-color: #008B8E;"><span class="shade">700</span><span class="hex">#008B8E</span></li>
                                <li class="color" style="background-color: #008184;"><span class="shade expanded">800</span><span class="hex">#008184</span></li>
                                <li class="color" style="background-color: #006F73;"><span class="shade expanded">900</span><span class="hex">#006F73</span></li>
                                <li class="color dark divide" style="background-color: #A1FBFF;"><span class="shade accent">A100</span><span class="hex">#A1FBFF</span></li>
                                <li class="color light-strong" style="background-color: #6EF9FF;"><span class="shade accent expanded">A200</span><span class="hex">#6EF9FF</span></li>
                                <li class="color" style="background-color: #3BF7FF;"><span class="shade accent expanded">A400</span><span class="hex">#3BF7FF</span></li>
                                <li class="color" style="background-color: #22F6FF;"><span class="shade accent">A700</span><span class="hex">#22F6FF</span></li>
                            </ul>
                        </div>
                        <div class="color-group col-sm-4 mb-3">
                            <ul class="pl-0">
                                <li class="color main-color" style="background-color: #0CC27E;">
                                    <span class="name light-strong">Success</span>
                                    <span class="shade light-strong">500</span>
                                    <span class="hex light-strong">#0CC27E</span>
                                </li>
                                <li class="color dark" style="background-color: #E2F8F0;"><span class="shade expanded">50</span><span class="hex">#E2F8F0</span></li>
                                <li class="color dark" style="background-color: #B6EDD8;"><span class="shade">100</span><span class="hex">#B6EDD8</span></li>
                                <li class="color dark" style="background-color: #86E1BF;"><span class="shade expanded">200</span><span class="hex">#86E1BF</span></li>
                                <li class="color dark" style="background-color: #55D4A5;"><span class="shade">300</span><span class="hex">#55D4A5</span></li>
                                <li class="color" style="background-color: #30CB91;"><span class="shade expanded">400</span><span class="hex">#30CB91</span></li>
                                <li class="color" style="background-color: #0CC27E;"><span class="shade">500</span><span class="hex">#0CC27E</span></li>
                                <li class="color" style="background-color: #0ABC76;"><span class="shade expanded">600</span><span class="hex">#0ABC76</span></li>
                                <li class="color" style="background-color: #08B46B;"><span class="shade">700</span><span class="hex">#08B46B</span></li>
                                <li class="color" style="background-color: #06AC61;"><span class="shade expanded">800</span><span class="hex">#06AC61</span></li>
                                <li class="color" style="background-color: #039F4E;"><span class="shade expanded">900</span><span class="hex">#039F4E</span></li>
                                <li class="color dark divide" style="background-color: #C9FFE0;"><span class="shade accent">A100</span><span class="hex">#C9FFE0</span></li>
                                <li class="color light-strong" style="background-color: #96FFC3;"><span class="shade accent expanded">A200</span><span class="hex">#96FFC3</span></li>
                                <li class="color" style="background-color: #63FFA5;"><span class="shade accent expanded">A400</span><span class="hex">#63FFA5</span></li>
                                <li class="color" style="background-color: #4AFF96;"><span class="shade accent">A700</span><span class="hex">#4AFF96</span></li>
                            </ul>
                        </div>
                        <div class="color-group col-sm-4 mb-3">
                            <ul class="pl-0">
                                <li class="color main-color" style="background-color: #FF586B;">
                                    <span class="name light-strong">Danger</span>
                                    <span class="shade light-strong">500</span>
                                    <span class="hex light-strong">#FF586B</span>
                                </li>
                                <li class="color dark" style="background-color: #FFEBED;"><span class="shade expanded">50</span><span class="hex">#FFEBED</span></li>
                                <li class="color dark" style="background-color: #FFCDD3;"><span class="shade">100</span><span class="hex">#FFCDD3</span></li>
                                <li class="color dark" style="background-color: #FFACB5;"><span class="shade expanded">200</span><span class="hex">#FFACB5</span></li>
                                <li class="color dark" style="background-color: #FF8A97;"><span class="shade">300</span><span class="hex">#FF8A97</span></li>
                                <li class="color" style="background-color: #FF7181;"><span class="shade expanded">400</span><span class="hex">#FF7181</span></li>
                                <li class="color" style="background-color: #FF586B;"><span class="shade">500</span><span class="hex">#FF586B</span></li>
                                <li class="color" style="background-color: #FF5063;"><span class="shade expanded">600</span><span class="hex">#FF5063</span></li>
                                <li class="color" style="background-color: #FF4758;"><span class="shade">700</span><span class="hex">#FF4758</span></li>
                                <li class="color" style="background-color: #FF3D4E;"><span class="shade expanded">800</span><span class="hex">#FF3D4E</span></li>
                                <li class="color" style="background-color: #FF2D3C;"><span class="shade expanded">900</span><span class="hex">#FF2D3C</span></li>
                                <li class="color dark divide" style="background-color: #FFFFFF;"><span class="shade accent">A100</span><span class="hex">#FFFFFF</span></li>
                                <li class="color light-strong" style="background-color: #FBEBED;"><span class="shade accent expanded">A200</span><span class="hex">#FBEBED</span></li>
                                <li class="color" style="background-color: #FFD9DB;"><span class="shade accent expanded">A400</span><span class="hex">#FFD9DB</span></li>
                                <li class="color" style="background-color: #FFBFC3;"><span class="shade accent">A700</span><span class="hex">#FFBFC3</span></li>
                            </ul>
                        </div>
                        <div class="color-group col-sm-4 mb-3">
                            <ul class="pl-0">
                                <li class="color main-color" style="background-color: #1CBCD8;">
                                    <span class="name light-strong">Info</span>
                                    <span class="shade light-strong">500</span>
                                    <span class="hex light-strong">#1CBCD8</span>
                                </li>
                                <li class="color dark" style="background-color: #E4F7FA;"><span class="shade expanded">50</span><span class="hex">#E4F7FA</span></li>
                                <li class="color dark" style="background-color: #BBEBF3;"><span class="shade">100</span><span class="hex">#BBEBF3</span></li>
                                <li class="color dark" style="background-color: #8EDEEC;"><span class="shade expanded">200</span><span class="hex">#8EDEEC</span></li>
                                <li class="color dark" style="background-color: #60D0E4;"><span class="shade">300</span><span class="hex">#60D0E4</span></li>
                                <li class="color" style="background-color: #3EC6DE;"><span class="shade expanded">400</span><span class="hex">#3EC6DE</span></li>
                                <li class="color" style="background-color: #1CBCD8;"><span class="shade">500</span><span class="hex">#1CBCD8</span></li>
                                <li class="color" style="background-color: #19B6D4;"><span class="shade expanded">600</span><span class="hex">#19B6D4</span></li>
                                <li class="color" style="background-color: #14ADCE;"><span class="shade">700</span><span class="hex">#14ADCE</span></li>
                                <li class="color" style="background-color: #11A5C8;"><span class="shade expanded">800</span><span class="hex">#11A5C8</span></li>
                                <li class="color" style="background-color: #0997BF;"><span class="shade expanded">900</span><span class="hex">#0997BF</span></li>
                                <li class="color dark divide" style="background-color: #EAFAFF;"><span class="shade accent">A100</span><span class="hex">#EAFAFF</span></li>
                                <li class="color light-strong" style="background-color: #B7EDFF;"><span class="shade accent expanded">A200</span><span class="hex">#B7EDFF</span></li>
                                <li class="color" style="background-color: #84E1FF;"><span class="shade accent expanded">A400</span><span class="hex">#84E1FF</span></li>
                                <li class="color" style="background-color: #6ADAFF;"><span class="shade accent">A700</span><span class="hex">#6ADAFF</span></li>
                            </ul>
                        </div>
                        <div class="color-group col-sm-4 mb-3">
                            <ul class="pl-0">
                                <li class="color main-color" style="background-color: #FF8D60;">
                                    <span class="name light-strong">Warning</span>
                                    <span class="shade light-strong">500</span>
                                    <span class="hex light-strong">#FF8D60</span>
                                </li>
                                <li class="color dark" style="background-color: #FFF1EC;"><span class="shade expanded">50</span><span class="hex">#FFF1EC</span></li>
                                <li class="color dark" style="background-color: #FFDDCF;"><span class="shade">100</span><span class="hex">#FFDDCF</span></li>
                                <li class="color dark" style="background-color: #FFC6B0;"><span class="shade expanded">200</span><span class="hex">#FFC6B0</span></li>
                                <li class="color dark" style="background-color: #FFAF90;"><span class="shade">300</span><span class="hex">#FFAF90</span></li>
                                <li class="color" style="background-color: #FF9E78;"><span class="shade expanded">400</span><span class="hex">#FF9E78</span></li>
                                <li class="color" style="background-color: #FF8D60;"><span class="shade">500</span><span class="hex">#FF8D60</span></li>
                                <li class="color" style="background-color: #FF8558;"><span class="shade expanded">600</span><span class="hex">#FF8558</span></li>
                                <li class="color" style="background-color: #FF7A4E;"><span class="shade">700</span><span class="hex">#FF7A4E</span></li>
                                <li class="color" style="background-color: #FF7044;"><span class="shade expanded">800</span><span class="hex">#FF7044</span></li>
                                <li class="color" style="background-color: #FF5D33;"><span class="shade expanded">900</span><span class="hex">#FF5D33</span></li>
                                <li class="color dark divide" style="background-color: #FFFFFF;"><span class="shade accent">A100</span><span class="hex">#FFFFFF</span></li>
                                <li class="color light-strong" style="background-color: #FFEFEC;"><span class="shade accent expanded">A200</span><span class="hex">#FFEFEC</span></li>
                                <li class="color" style="background-color: #FFE4DE;"><span class="shade accent expanded">A400</span><span class="hex">#FFE4DE</span></li>
                                <li class="color" style="background-color: #FFCFC4;"><span class="shade accent">A700</span><span class="hex">#FFCFC4</span></li>
                            </ul>
                        </div>
                    </div>
                    <!--App color Ends-->
                </section>

                <section class="color-palette" id="other-colors">
                    <!-- Color Starts-->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="content-header mb-3">Palette with More Colors</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="color-group col-sm-4 mb-3">
                            <ul class="pl-0">
                                <li class="color main-color" style="background-color: #f44336;">
                                    <span class="name light-strong">Red</span>
                                    <span class="shade light-strong">500</span>
                                    <span class="hex light-strong">#f44336</span>
                                </li>
                                <li class="color dark" style="background-color: #ffebee;"><span class="shade expanded">50</span><span class="hex">#ffebee</span></li>
                                <li class="color dark" style="background-color: #ffcdd2;"><span class="shade">100</span><span class="hex">#ffcdd2</span></li>
                                <li class="color dark" style="background-color: #ef9a9a;"><span class="shade expanded">200</span><span class="hex">#ef9a9a</span></li>
                                <li class="color dark" style="background-color: #e57373;"><span class="shade">300</span><span class="hex">#e57373</span></li>
                                <li class="color" style="background-color: #ef5350;"><span class="shade expanded">400</span><span class="hex">#ef5350</span></li>
                                <li class="color" style="background-color: #f44336;"><span class="shade">500</span><span class="hex">#f44336</span></li>
                                <li class="color" style="background-color: #e53935;"><span class="shade expanded">600</span><span class="hex">#e53935</span></li>
                                <li class="color" style="background-color: #d32f2f;"><span class="shade">700</span><span class="hex">#d32f2f</span></li>
                                <li class="color" style="background-color: #c62828;"><span class="shade expanded">800</span><span class="hex">#c62828</span></li>
                                <li class="color" style="background-color: #b71c1c;"><span class="shade expanded">900</span><span class="hex">#b71c1c</span></li>
                                <li class="color dark divide" style="background-color: #ff8a80;"><span class="shade accent">A100</span><span class="hex">#ff8a80</span></li>
                                <li class="color light-strong" style="background-color: #ff5252;"><span class="shade accent expanded">A200</span><span class="hex">#ff5252</span></li>
                                <li class="color" style="background-color: #ff1744;"><span class="shade accent expanded">A400</span><span class="hex">#ff1744</span></li>
                                <li class="color" style="background-color: #d50000;"><span class="shade accent">A700</span><span class="hex">#d50000</span></li>
                            </ul>
                        </div>


                        <div class="color-group col-sm-4 mb-3">
                            <ul class="pl-0">
                                <li class="color main-color" style="background-color: #E91E63;">
                                    <span class="name light-strong">Pink</span>
                                    <span class="shade light-strong">500</span>
                                    <span class="hex light-strong">#e91e63</span>
                                </li>
                                <li class="color dark" style="background-color: #fce4ec;"><span class="shade expanded">50</span><span class="hex">#fce4ec</span></li>
                                <li class="color dark" style="background-color: #f8bbd0;"><span class="shade">100</span><span class="hex">#f8bbd0</span></li>
                                <li class="color dark" style="background-color: #f48fb1;"><span class="shade expanded">200</span><span class="hex">#f48fb1</span></li>
                                <li class="color light-strong" style="background-color: #f06292;"><span class="shade">300</span><span class="hex">#f06292</span></li>
                                <li class="color " style="background-color: #ec407a;"><span class="shade expanded">400</span><span class="hex">#ec407a</span></li>
                                <li class="color" style="background-color: #e91e63;"><span class="shade">500</span><span class="hex">#e91e63</span></li>
                                <li class="color" style="background-color: #d81b60;"><span class="shade expanded">600</span><span class="hex">#d81b60</span></li>
                                <li class="color" style="background-color: #c2185b;"><span class="shade">700</span><span class="hex">#c2185b</span></li>
                                <li class="color" style="background-color: #ad1457;"><span class="shade">800</span><span class="hex">#ad1457</span></li>
                                <li class="color" style="background-color: #880e4f;"><span class="shade">900</span><span class="hex">#880e4f</span></li>
                                <li class="color dark divide" style="background-color: #ff80ab;"><span class="shade accent">A100</span><span class="hex">#ff80ab</span></li>
                                <li class="color light-strong" style="background-color: #ff4081;"><span class="shade accent expanded">A200</span><span class="hex">#ff4081</span></li>
                                <li class="color" style="background-color: #f50057;"><span class="shade accent expanded">A400</span><span class="hex">#f50057</span></li>
                                <li class="color" style="background-color: #c51162;"><span class="shade accent">A700</span><span class="hex">#c51162</span></li>
                            </ul>
                        </div>


                        <div class="color-group col-sm-4 mb-3">
                            <ul class="pl-0">
                                <li class="color main-color" style="background-color: #9c27b0;">
                                    <span class="name">Purple</span>
                                    <span class="shade">500</span>
                                    <span class="hex">#9c27b0</span>
                                </li>
                                <li class="color dark" style="background-color: #f3e5f5;"><span class="shade expanded">50</span><span class="hex">#f3e5f5</span></li>
                                <li class="color dark" style="background-color: #e1bee7;"><span class="shade">100</span><span class="hex">#e1bee7</span></li>
                                <li class="color dark" style="background-color: #ce93d8;"><span class="shade expanded">200</span><span class="hex">#ce93d8</span></li>
                                <li class="color light-strong" style="background-color: #ba68c8;"><span class="shade">300</span><span class="hex">#ba68c8</span></li>
                                <li class="color light-strong" style="background-color: #ab47bc;"><span class="shade expanded">400</span><span class="hex">#ab47bc</span></li>
                                <li class="color" style="background-color: #9c27b0;"><span class="shade">500</span><span class="hex">#9c27b0</span></li>
                                <li class="color" style="background-color: #8e24aa;"><span class="shade expanded">600</span><span class="hex">#8e24aa</span></li>
                                <li class="color" style="background-color: #7b1fa2;"><span class="shade">700</span><span class="hex">#7b1fa2</span></li>
                                <li class="color" style="background-color: #6a1b9a;"><span class="shade expanded">800</span><span class="hex">#6a1b9a</span></li>
                                <li class="color" style="background-color: #4a148c;"><span class="shade expanded">900</span><span class="hex">#4a148c</span></li>
                                <li class="color dark divide" style="background-color: #ea80fc;"><span class="shade accent">A100</span><span class="hex">#ea80fc</span></li>
                                <li class="color light-strong" style="background-color: #e040fb;"><span class="shade accent expanded">A200</span><span class="hex">#e040fb</span></li>
                                <li class="color" style="background-color: #d500f9;"><span class="shade accent expanded">A400</span><span class="hex">#d500f9</span></li>
                                <li class="color" style="background-color: #aa00ff;"><span class="shade accent">A700</span><span class="hex">#aa00ff</span></li>
                            </ul>
                        </div>


                        <div class="color-group col-sm-4 mb-3">
                            <ul class="pl-0">
                                <li class="color main-color" style="background-color: #673ab7;">
                                    <span class="name">Deep Purple</span>
                                    <span class="shade">500</span>
                                    <span class="hex">#673ab7</span>
                                </li>
                                <li class="color dark" style="background-color: #ede7f6;"><span class="shade expanded">50</span><span class="hex">#ede7f6</span></li>
                                <li class="color dark" style="background-color: #d1c4e9;"><span class="shade">100</span><span class="hex">#d1c4e9</span></li>
                                <li class="color dark" style="background-color: #b39ddb;"><span class="shade expanded">200</span><span class="hex">#b39ddb</span></li>
                                <li class="color" style="background-color: #9575cd;"><span class="shade">300</span><span class="hex">#9575cd</span></li>
                                <li class="color" style="background-color: #7e57c2;"><span class="shade expanded">400</span><span class="hex">#7e57c2</span></li>
                                <li class="color" style="background-color: #673ab7;"><span class="shade">500</span><span class="hex">#673ab7</span></li>
                                <li class="color" style="background-color: #5e35b1;"><span class="shade expanded">600</span><span class="hex">#5e35b1</span></li>
                                <li class="color" style="background-color: #512da8;"><span class="shade">700</span><span class="hex">#512da8</span></li>
                                <li class="color" style="background-color: #4527a0;"><span class="shade expanded">800</span><span class="hex">#4527a0</span></li>
                                <li class="color" style="background-color: #311b92;"><span class="shade expanded">900</span><span class="hex">#311b92</span></li>
                                <li class="color dark divide" style="background-color: #b388ff;"><span class="shade accent">A100</span><span class="hex">#b388ff</span></li>
                                <li class="color light-strong" style="background-color: #7c4dff;"><span class="shade accent expanded">A200</span><span class="hex">#7c4dff</span></li>
                                <li class="color" style="background-color: #651fff;"><span class="shade accent expanded">A400</span><span class="hex">#651fff</span></li>
                                <li class="color" style="background-color: #6200ea;"><span class="shade accent">A700</span><span class="hex">#6200ea</span></li>
                            </ul>
                        </div>


                        <div class="color-group col-sm-4 mb-3">
                            <ul class="pl-0">
                                <li class="color main-color" style="background-color: #3f51b5;">
                                    <span class="name">Indigo</span>
                                    <span class="shade">500</span>
                                    <span class="hex">#3f51b5</span>
                                </li>
                                <li class="color dark" style="background-color: #e8eaf6;"><span class="shade expanded">50</span><span class="hex">#e8eaf6</span></li>
                                <li class="color dark" style="background-color: #c5cae9;"><span class="shade">100</span><span class="hex">#c5cae9</span></li>
                                <li class="color dark" style="background-color: #9fa8da;"><span class="shade expanded">200</span><span class="hex">#9fa8da</span></li>
                                <li class="color" style="background-color: #7986cb;"><span class="shade">300</span><span class="hex">#7986cb</span></li>
                                <li class="color" style="background-color: #5c6bc0;"><span class="shade expanded">400</span><span class="hex">#5c6bc0</span></li>
                                <li class="color" style="background-color: #3f51b5;"><span class="shade">500</span><span class="hex">#3f51b5</span></li>
                                <li class="color" style="background-color: #3949ab;"><span class="shade expanded">600</span><span class="hex">#3949ab</span></li>
                                <li class="color" style="background-color: #303f9f;"><span class="shade">700</span><span class="hex">#303f9f</span></li>
                                <li class="color" style="background-color: #283593;"><span class="shade expanded">800</span><span class="hex">#283593</span></li>
                                <li class="color" style="background-color: #1a237e;"><span class="shade expanded">900</span><span class="hex">#1a237e</span></li>
                                <li class="color dark divide" style="background-color: #8c9eff;"><span class="shade accent">A100</span><span class="hex">#8c9eff</span></li>
                                <li class="color" style="background-color: #536dfe;"><span class="shade accent expanded">A200</span><span class="hex">#536dfe</span></li>
                                <li class="color" style="background-color: #3d5afe;"><span class="shade accent expanded">A400</span><span class="hex">#3d5afe</span></li>
                                <li class="color" style="background-color: #304ffe;"><span class="shade accent">A700</span><span class="hex">#304ffe</span></li>
                            </ul>
                        </div>


                        <div class="color-group col-sm-4 mb-3">
                            <ul class="pl-0">
                                <li class="color main-color" style="background-color: #2196F3;">
                                    <span class="name light-strong">Blue</span>
                                    <span class="shade light-strong">500</span>
                                    <span class="hex light-strong">#2196f3</span>
                                </li>
                                <li class="color dark" style="background-color: #e3f2fd;"><span class="shade expanded">50</span><span class="hex">#e3f2fd</span></li>
                                <li class="color dark" style="background-color: #bbdefb;"><span class="shade">100</span><span class="hex">#bbdefb</span></li>
                                <li class="color dark" style="background-color: #90caf9;"><span class="shade expanded">200</span><span class="hex">#90caf9</span></li>
                                <li class="color dark" style="background-color: #64b5f6;"><span class="shade">300</span><span class="hex">#64b5f6</span></li>
                                <li class="color dark" style="background-color: #42a5f5;"><span class="shade expanded">400</span><span class="hex">#42a5f5</span></li>
                                <li class="color light-strong" style="background-color: #2196f3;"><span class="shade">500</span><span class="hex">#2196f3</span></li>
                                <li class="color" style="background-color: #1e88e5;"><span class="shade expanded">600</span><span class="hex">#1e88e5</span></li>
                                <li class="color" style="background-color: #1976d2;"><span class="shade">700</span><span class="hex">#1976d2</span></li>
                                <li class="color" style="background-color: #1565c0;"><span class="shade expanded">800</span><span class="hex">#1565c0</span></li>
                                <li class="color" style="background-color: #0d47a1;"><span class="shade expanded">900</span><span class="hex">#0d47a1</span></li>
                                <li class="color dark divide" style="background-color: #82b1ff;"><span class="shade accent">A100</span><span class="hex">#82b1ff</span></li>
                                <li class="color light-strong" style="background-color: #448aff;"><span class="shade accent expanded">A200</span><span class="hex">#448aff</span></li>
                                <li class="color" style="background-color: #2979ff;"><span class="shade accent expanded">A400</span><span class="hex">#2979ff</span></li>
                                <li class="color" style="background-color: #2962ff;"><span class="shade accent">A700</span><span class="hex">#2962ff</span></li>
                            </ul>
                        </div>


                        <div class="color-group col-sm-4 mb-3">
                            <ul class="pl-0">
                                <li class="color main-color" style="background-color: #03a9f4;">
                                    <span class="name dark">Light Blue</span>
                                    <span class="shade dark">500</span>
                                    <span class="hex dark">#03a9f4</span>
                                </li>
                                <li class="color dark" style="background-color: #e1f5fe;"><span class="shade expanded">50</span><span class="hex">#e1f5fe</span></li>
                                <li class="color dark" style="background-color: #b3e5fc;"><span class="shade">100</span><span class="hex">#b3e5fc</span></li>
                                <li class="color dark" style="background-color: #81d4fa;"><span class="shade expanded">200</span><span class="hex">#81d4fa</span></li>
                                <li class="color dark" style="background-color: #4fc3f7;"><span class="shade">300</span><span class="hex">#4fc3f7</span></li>
                                <li class="color dark" style="background-color: #29b6f6;"><span class="shade expanded">400</span><span class="hex">#29b6f6</span></li>
                                <li class="color dark" style="background-color: #03a9f4;"><span class="shade">500</span><span class="hex">#03a9f4</span></li>
                                <li class="color light-strong" style="background-color: #039be5;"><span class="shade expanded">600</span><span class="hex">#039be5</span></li>
                                <li class="color" style="background-color: #0288d1;"><span class="shade">700</span><span class="hex">#0288d1</span></li>
                                <li class="color" style="background-color: #0277bd;"><span class="shade expanded">800</span><span class="hex">#0277bd</span></li>
                                <li class="color" style="background-color: #01579b;"><span class="shade expanded">900</span><span class="hex">#01579b</span></li>
                                <li class="color dark divide" style="background-color: #80d8ff;"><span class="shade accent">A100</span><span class="hex">#80d8ff</span></li>
                                <li class="color dark" style="background-color: #40c4ff;"><span class="shade accent expanded">A200</span><span class="hex">#40c4ff</span></li>
                                <li class="color dark" style="background-color: #00b0ff;"><span class="shade accent expanded">A400</span><span class="hex">#00b0ff</span></li>
                                <li class="color light-strong" style="background-color: #0091ea;"><span class="shade accent">A700</span><span class="hex">#0091ea</span></li>
                            </ul>
                        </div>


                        <div class="color-group col-sm-4 mb-3">
                            <ul class="pl-0">
                                <li class="color main-color" style="background-color: #00bcd4;">
                                    <span class="name dark">Cyan</span>
                                    <span class="shade dark">500</span>
                                    <span class="hex dark">#00bcd4</span>
                                </li>
                                <li class="color dark" style="background-color: #e0f7fa;"><span class="shade expanded">50</span><span class="hex">#e0f7fa</span></li>
                                <li class="color dark" style="background-color: #b2ebf2;"><span class="shade">100</span><span class="hex">#b2ebf2</span></li>
                                <li class="color dark" style="background-color: #80deea;"><span class="shade expanded">200</span><span class="hex">#80deea</span></li>
                                <li class="color dark" style="background-color: #4dd0e1;"><span class="shade">300</span><span class="hex">#4dd0e1</span></li>
                                <li class="color dark" style="background-color: #26c6da;"><span class="shade expanded">400</span><span class="hex">#26c6da</span></li>
                                <li class="color dark" style="background-color: #00bcd4;"><span class="shade">500</span><span class="hex">#00bcd4</span></li>
                                <li class="color dark" style="background-color: #00acc1;"><span class="shade expanded">600</span><span class="hex">#00acc1</span></li>
                                <li class="color" style="background-color: #0097a7;"><span class="shade">700</span><span class="hex">#0097a7</span></li>
                                <li class="color" style="background-color: #00838f;"><span class="shade expanded">800</span><span class="hex">#00838f</span></li>
                                <li class="color" style="background-color: #006064;"><span class="shade expanded">900</span><span class="hex">#006064</span></li>
                                <li class="color dark divide" style="background-color: #84ffff;"><span class="shade accent">A100</span><span class="hex">#84ffff</span></li>
                                <li class="color dark" style="background-color: #18ffff;"><span class="shade accent expanded">A200</span><span class="hex">#18ffff</span></li>
                                <li class="color dark" style="background-color: #00e5ff;"><span class="shade accent expanded">A400</span><span class="hex">#00e5ff</span></li>
                                <li class="color dark" style="background-color: #00b8d4;"><span class="shade accent">A700</span><span class="hex">#00b8d4</span></li>
                            </ul>
                        </div>


                        <div class="color-group col-sm-4 mb-3">
                            <ul class="pl-0">
                                <li class="color main-color" style="background-color: #009688;">
                                    <span class="name light-strong">Teal</span>
                                    <span class="shade light-strong">500</span>
                                    <span class="hex light-strong">#009688</span>
                                </li>
                                <li class="color dark" style="background-color: #e0f2f1;"><span class="shade expanded">50</span><span class="hex">#e0f2f1</span></li>
                                <li class="color dark" style="background-color: #b2dfdb;"><span class="shade">100</span><span class="hex">#b2dfdb</span></li>
                                <li class="color dark" style="background-color: #80cbc4;"><span class="shade expanded">200</span><span class="hex">#80cbc4</span></li>
                                <li class="color dark" style="background-color: #4db6ac;"><span class="shade">300</span><span class="hex">#4db6ac</span></li>
                                <li class="color dark" style="background-color: #26a69a;"><span class="shade expanded">400</span><span class="hex">#26a69a</span></li>
                                <li class="color light-strong" style="background-color: #009688;"><span class="shade">500</span><span class="hex">#009688</span></li>
                                <li class="color light-strong" style="background-color: #00897b;"><span class="shade expanded">600</span><span class="hex">#00897b</span></li>
                                <li class="color light-strong" style="background-color: #00796b;"><span class="shade">700</span><span class="hex">#00796b</span></li>
                                <li class="color" style="background-color: #00695c;"><span class="shade expanded">800</span><span class="hex">#00695c</span></li>
                                <li class="color" style="background-color: #004d40;"><span class="shade expanded">900</span><span class="hex">#004d40</span></li>
                                <li class="color dark divide" style="background-color: #a7ffeb;"><span class="shade accent">A100</span><span class="hex">#a7ffeb</span></li>
                                <li class="color dark" style="background-color: #64ffda;"><span class="shade accent expanded">A200</span><span class="hex">#64ffda</span></li>
                                <li class="color dark" style="background-color: #1de9b6;"><span class="shade accent expanded">A400</span><span class="hex">#1de9b6</span></li>
                                <li class="color dark" style="background-color: #00bfa5;"><span class="shade accent">A700</span><span class="hex">#00bfa5</span></li>
                            </ul>
                        </div>


                        <div class="color-group col-sm-4 mb-3">
                            <ul class="pl-0">
                                <li class="color main-color" style="background-color: #4caf50;">
                                    <span class="name dark">Green</span>
                                    <span class="shade dark">500</span>
                                    <span class="hex dark">#4caf50</span>
                                </li>
                                <li class="color dark" style="background-color: #e8f5e9;"><span class="shade expanded">50</span><span class="hex">#e8f5e9</span></li>
                                <li class="color dark" style="background-color: #c8e6c9;"><span class="shade">100</span><span class="hex">#c8e6c9</span></li>
                                <li class="color dark" style="background-color: #a5d6a7;"><span class="shade expanded">200</span><span class="hex">#a5d6a7</span></li>
                                <li class="color dark" style="background-color: #81c784;"><span class="shade">300</span><span class="hex">#81c784</span></li>
                                <li class="color dark" style="background-color: #66bb6a;"><span class="shade expanded">400</span><span class="hex">#66bb6a</span></li>
                                <li class="color dark" style="background-color: #4caf50;"><span class="shade">500</span><span class="hex">#4caf50</span></li>
                                <li class="color light-strong" style="background-color: #43a047;"><span class="shade expanded">600</span><span class="hex">#43a047</span></li>
                                <li class="color" style="background-color: #388e3c;"><span class="shade">700</span><span class="hex">#388e3c</span></li>
                                <li class="color" style="background-color: #2e7d32;"><span class="shade expanded">800</span><span class="hex">#2e7d32</span></li>
                                <li class="color" style="background-color: #1b5e20;"><span class="shade expanded">900</span><span class="hex">#1b5e20</span></li>
                                <li class="color dark divide" style="background-color: #b9f6ca;"><span class="shade accent">A100</span><span class="hex">#b9f6ca</span></li>
                                <li class="color dark" style="background-color: #69f0ae;"><span class="shade accent expanded">A200</span><span class="hex">#69f0ae</span></li>
                                <li class="color dark" style="background-color: #00e676;"><span class="shade accent expanded">A400</span><span class="hex">#00e676</span></li>
                                <li class="color dark" style="background-color: #00c853;"><span class="shade accent">A700</span><span class="hex">#00c853</span></li>
                            </ul>
                        </div>


                        <div class="color-group col-sm-4 mb-3">
                            <ul class="pl-0">
                                <li class="color main-color" style="background-color: #8bc34a;">
                                    <span class="name dark">Light Green</span>
                                    <span class="shade dark">500</span>
                                    <span class="hex dark">#8bc34a</span>
                                </li>
                                <li class="color dark" style="background-color: #f1f8e9;"><span class="shade expanded">50</span><span class="hex">#f1f8e9</span></li>
                                <li class="color dark" style="background-color: #dcedc8;"><span class="shade">100</span><span class="hex">#dcedc8</span></li>
                                <li class="color dark" style="background-color: #c5e1a5;"><span class="shade expanded">200</span><span class="hex">#c5e1a5</span></li>
                                <li class="color dark" style="background-color: #aed581;"><span class="shade">300</span><span class="hex">#aed581</span></li>
                                <li class="color dark" style="background-color: #9ccc65;"><span class="shade expanded">400</span><span class="hex">#9ccc65</span></li>
                                <li class="color dark" style="background-color: #8bc34a;"><span class="shade">500</span><span class="hex">#8bc34a</span></li>
                                <li class="color dark" style="background-color: #7cb342;"><span class="shade expanded">600</span><span class="hex">#7cb342</span></li>
                                <li class="color light-strong" style="background-color: #689f38;"><span class="shade">700</span><span class="hex">#689f38</span></li>
                                <li class="color" style="background-color: #558b2f;"><span class="shade expanded">800</span><span class="hex">#558b2f</span></li>
                                <li class="color" style="background-color: #33691e;"><span class="shade expanded">900</span><span class="hex">#33691e</span></li>
                                <li class="color dark divide" style="background-color: #ccff90;"><span class="shade accent">A100</span><span class="hex">#ccff90</span></li>
                                <li class="color dark" style="background-color: #b2ff59;"><span class="shade accent expanded">A200</span><span class="hex">#b2ff59</span></li>
                                <li class="color dark" style="background-color: #76ff03;"><span class="shade accent expanded">A400</span><span class="hex">#76ff03</span></li>
                                <li class="color dark" style="background-color: #64dd17;"><span class="shade accent">A700</span><span class="hex">#64dd17</span></li>
                            </ul>
                        </div>


                        <div class="color-group col-sm-4 mb-3">
                            <ul class="pl-0">
                                <li class="color main-color" style="background-color: #cddc39;">
                                    <span class="name dark">Lime</span>
                                    <span class="shade dark">500</span>
                                    <span class="hex dark">#cddc39</span>
                                </li>
                                <li class="color dark" style="background-color: #f9fbe7;"><span class="shade expanded">50</span><span class="hex">#f9fbe7</span></li>
                                <li class="color dark" style="background-color: #f0f4c3;"><span class="shade">100</span><span class="hex">#f0f4c3</span></li>
                                <li class="color dark" style="background-color: #e6ee9c;"><span class="shade expanded">200</span><span class="hex">#e6ee9c</span></li>
                                <li class="color dark" style="background-color: #dce775;"><span class="shade">300</span><span class="hex">#dce775</span></li>
                                <li class="color dark" style="background-color: #d4e157;"><span class="shade expanded">400</span><span class="hex">#d4e157</span></li>
                                <li class="color dark" style="background-color: #cddc39;"><span class="shade">500</span><span class="hex">#cddc39</span></li>
                                <li class="color dark" style="background-color: #c0ca33;"><span class="shade expanded">600</span><span class="hex">#c0ca33</span></li>
                                <li class="color dark" style="background-color: #afb42b;"><span class="shade">700</span><span class="hex">#afb42b</span></li>
                                <li class="color dark" style="background-color: #9e9d24;"><span class="shade expanded">800</span><span class="hex">#9e9d24</span></li>
                                <li class="color" style="background-color: #827717;"><span class="shade expanded">900</span><span class="hex">#827717</span></li>
                                <li class="color dark divide" style="background-color: #f4ff81;"><span class="shade accent">A100</span><span class="hex">#f4ff81</span></li>
                                <li class="color dark" style="background-color: #eeff41;"><span class="shade accent expanded">A200</span><span class="hex">#eeff41</span></li>
                                <li class="color dark" style="background-color: #c6ff00;"><span class="shade accent expanded">A400</span><span class="hex">#c6ff00</span></li>
                                <li class="color dark" style="background-color: #aeea00;"><span class="shade accent">A700</span><span class="hex">#aeea00</span></li>
                            </ul>
                        </div>


                        <div class="color-group col-sm-4 mb-3">
                            <ul class="pl-0">
                                <li class="color main-color" style="background-color: #ffeb3b;">
                                    <span class="name dark">Yellow</span>
                                    <span class="shade dark">500</span>
                                    <span class="hex dark">#ffeb3b</span>
                                </li>
                                <li class="color dark" style="background-color: #fffde7;"><span class="shade expanded">50</span><span class="hex">#fffde7</span></li>
                                <li class="color dark" style="background-color: #fff9c4;"><span class="shade">100</span><span class="hex">#fff9c4</span></li>
                                <li class="color dark" style="background-color: #fff59d;"><span class="shade expanded">200</span><span class="hex">#fff59d</span></li>
                                <li class="color dark" style="background-color: #fff176;"><span class="shade">300</span><span class="hex">#fff176</span></li>
                                <li class="color dark" style="background-color: #ffee58;"><span class="shade expanded">400</span><span class="hex">#ffee58</span></li>
                                <li class="color dark" style="background-color: #ffeb3b;"><span class="shade">500</span><span class="hex">#ffeb3b</span></li>
                                <li class="color dark" style="background-color: #fdd835;"><span class="shade expanded">600</span><span class="hex">#fdd835</span></li>
                                <li class="color dark" style="background-color: #fbc02d;"><span class="shade">700</span><span class="hex">#fbc02d</span></li>
                                <li class="color dark" style="background-color: #f9a825;"><span class="shade expanded">800</span><span class="hex">#f9a825</span></li>
                                <li class="color dark" style="background-color: #f57f17;"><span class="shade expanded">900</span><span class="hex">#f57f17</span></li>
                                <li class="color dark divide" style="background-color: #ffff8d;"><span class="shade accent">A100</span><span class="hex">#ffff8d</span></li>
                                <li class="color dark" style="background-color: #ffff00;"><span class="shade accent expanded">A200</span><span class="hex">#ffff00</span></li>
                                <li class="color dark" style="background-color: #ffea00;"><span class="shade accent expanded">A400</span><span class="hex">#ffea00</span></li>
                                <li class="color dark" style="background-color: #ffd600;"><span class="shade accent">A700</span><span class="hex">#ffd600</span></li>
                            </ul>
                        </div>


                        <div class="color-group col-sm-4 mb-3">
                            <ul class="pl-0">
                                <li class="color main-color" style="background-color: #ffc107;">
                                    <span class="name dark">Amber</span>
                                    <span class="shade dark">500</span>
                                    <span class="hex dark">#ffc107</span>
                                </li>
                                <li class="color dark" style="background-color: #fff8e1;"><span class="shade expanded">50</span><span class="hex">#fff8e1</span></li>
                                <li class="color dark" style="background-color: #ffecb3;"><span class="shade">100</span><span class="hex">#ffecb3</span></li>
                                <li class="color dark" style="background-color: #ffe082;"><span class="shade expanded">200</span><span class="hex">#ffe082</span></li>
                                <li class="color dark" style="background-color: #ffd54f;"><span class="shade">300</span><span class="hex">#ffd54f</span></li>
                                <li class="color dark" style="background-color: #ffca28;"><span class="shade expanded">400</span><span class="hex">#ffca28</span></li>
                                <li class="color dark" style="background-color: #ffc107;"><span class="shade">500</span><span class="hex">#ffc107</span></li>
                                <li class="color dark" style="background-color: #ffb300;"><span class="shade expanded">600</span><span class="hex">#ffb300</span></li>
                                <li class="color dark" style="background-color: #ffa000;"><span class="shade">700</span><span class="hex">#ffa000</span></li>
                                <li class="color dark" style="background-color: #ff8f00;"><span class="shade expanded">800</span><span class="hex">#ff8f00</span></li>
                                <li class="color dark" style="background-color: #ff6f00;"><span class="shade expanded">900</span><span class="hex">#ff6f00</span></li>
                                <li class="color dark divide" style="background-color: #ffe57f;"><span class="shade accent">A100</span><span class="hex">#ffe57f</span></li>
                                <li class="color dark" style="background-color: #ffd740;"><span class="shade accent expanded">A200</span><span class="hex">#ffd740</span></li>
                                <li class="color dark" style="background-color: #ffc400;"><span class="shade accent expanded">A400</span><span class="hex">#ffc400</span></li>
                                <li class="color dark" style="background-color: #ffab00;"><span class="shade accent">A700</span><span class="hex">#ffab00</span></li>
                            </ul>
                        </div>


                        <div class="color-group col-sm-4 mb-3">
                            <ul class="pl-0">
                                <li class="color main-color" style="background-color: #ff9800;">
                                    <span class="name dark-when-small">Orange</span>
                                    <span class="shade dark-when-small">500</span>
                                    <span class="hex dark-when-small">#ff9800</span>
                                </li>
                                <li class="color dark" style="background-color: #fff3e0;"><span class="shade expanded">50</span><span class="hex">#fff3e0</span></li>
                                <li class="color dark" style="background-color: #ffe0b2;"><span class="shade">100</span><span class="hex">#ffe0b2</span></li>
                                <li class="color dark" style="background-color: #ffcc80;"><span class="shade expanded">200</span><span class="hex">#ffcc80</span></li>
                                <li class="color dark" style="background-color: #ffb74d;"><span class="shade">300</span><span class="hex">#ffb74d</span></li>
                                <li class="color dark" style="background-color: #ffa726;"><span class="shade expanded">400</span><span class="hex">#ffa726</span></li>
                                <li class="color dark" style="background-color: #ff9800;"><span class="shade">500</span><span class="hex">#ff9800</span></li>
                                <li class="color dark" style="background-color: #fb8c00;"><span class="shade expanded">600</span><span class="hex">#fb8c00</span></li>
                                <li class="color dark" style="background-color: #f57c00;"><span class="shade">700</span><span class="hex">#f57c00</span></li>
                                <li class="color light-strong" style="background-color: #ef6c00;"><span class="shade expanded">800</span><span class="hex">#ef6c00</span></li>
                                <li class="color" style="background-color: #e65100;"><span class="shade expanded">900</span><span class="hex">#e65100</span></li>
                                <li class="color dark divide" style="background-color: #ffd180;"><span class="shade accent">A100</span><span class="hex">#ffd180</span></li>
                                <li class="color dark" style="background-color: #ffab40;"><span class="shade accent expanded">A200</span><span class="hex">#ffab40</span></li>
                                <li class="color dark" style="background-color: #ff9100;"><span class="shade accent expanded">A400</span><span class="hex">#ff9100</span></li>
                                <li class="color dark" style="background-color: #ff6d00;"><span class="shade accent">A700</span><span class="hex">#ff6d00</span></li>
                            </ul>
                        </div>


                        <div class="color-group col-sm-4 mb-3">
                            <ul class="pl-0">
                                <li class="color main-color" style="background-color: #ff5722;">
                                    <span class="name light-strong">Deep Orange</span>
                                    <span class="shade light-strong">500</span>
                                    <span class="hex light-strong">#ff5722</span>
                                </li>
                                <li class="color dark" style="background-color: #fbe9e7;"><span class="shade expanded">50</span><span class="hex">#fbe9e7</span></li>
                                <li class="color dark" style="background-color: #ffccbc;"><span class="shade">100</span><span class="hex">#ffccbc</span></li>
                                <li class="color dark" style="background-color: #ffab91;"><span class="shade expanded">200</span><span class="hex">#ffab91</span></li>
                                <li class="color dark" style="background-color: #ff8a65;"><span class="shade">300</span><span class="hex">#ff8a65</span></li>
                                <li class="color dark" style="background-color: #ff7043;"><span class="shade expanded">400</span><span class="hex">#ff7043</span></li>
                                <li class="color light-strong" style="background-color: #ff5722;"><span class="shade">500</span><span class="hex">#ff5722</span></li>
                                <li class="color" style="background-color: #f4511e;"><span class="shade expanded">600</span><span class="hex">#f4511e</span></li>
                                <li class="color" style="background-color: #e64a19;"><span class="shade">700</span><span class="hex">#e64a19</span></li>
                                <li class="color" style="background-color: #d84315;"><span class="shade expanded">800</span><span class="hex">#d84315</span></li>
                                <li class="color" style="background-color: #bf360c;"><span class="shade expanded">900</span><span class="hex">#bf360c</span></li>
                                <li class="color dark divide" style="background-color: #ff9e80;"><span class="shade accent">A100</span><span class="hex">#ff9e80</span></li>
                                <li class="color dark" style="background-color: #ff6e40;"><span class="shade accent expanded">A200</span><span class="hex">#ff6e40</span></li>
                                <li class="color" style="background-color: #ff3d00;"><span class="shade accent expanded">A400</span><span class="hex">#ff3d00</span></li>
                                <li class="color" style="background-color: #dd2c00;"><span class="shade accent">A700</span><span class="hex">#dd2c00</span></li>
                            </ul>
                        </div>


                        <div class="color-group col-sm-4 mb-3">
                            <ul class="pl-0">
                                <li class="color main-color" style="background-color: #795548;">
                                    <span class="name">Brown</span>
                                    <span class="shade">500</span>
                                    <span class="hex">#795548</span>
                                </li>
                                <li class="color dark" style="background-color: #efebe9;"><span class="shade expanded">50</span><span class="hex">#efebe9</span></li>
                                <li class="color dark" style="background-color: #d7ccc8;"><span class="shade">100</span><span class="hex">#d7ccc8</span></li>
                                <li class="color dark" style="background-color: #bcaaa4;"><span class="shade expanded">200</span><span class="hex">#bcaaa4</span></li>
                                <li class="color light-strong" style="background-color: #a1887f;"><span class="shade">300</span><span class="hex">#a1887f</span></li>
                                <li class="color" style="background-color: #8d6e63;"><span class="shade expanded">400</span><span class="hex">#8d6e63</span></li>
                                <li class="color" style="background-color: #795548;"><span class="shade">500</span><span class="hex">#795548</span></li>
                                <li class="color" style="background-color: #6d4c41;"><span class="shade expanded">600</span><span class="hex">#6d4c41</span></li>
                                <li class="color" style="background-color: #5d4037;"><span class="shade">700</span><span class="hex">#5d4037</span></li>
                                <li class="color" style="background-color: #4e342e;"><span class="shade expanded">800</span><span class="hex">#4e342e</span></li>
                                <li class="color" style="background-color: #3e2723;"><span class="shade expanded">900</span><span class="hex">#3e2723</span></li>
                            </ul>
                        </div>


                        <div class="color-group col-sm-4 mb-3">
                            <ul class="pl-0">
                                <li class="color main-color" style="background-color: #9e9e9e;">
                                    <span class="name dark-when-small">Grey</span>
                                    <span class="shade dark-when-small">500</span>
                                    <span class="hex dark-when-small">#9e9e9e</span>
                                </li>
                                <li class="color dark" style="background-color: #fafafa;"><span class="shade expanded">50</span><span class="hex">#fafafa</span></li>
                                <li class="color dark" style="background-color: #f5f5f5;"><span class="shade">100</span><span class="hex">#f5f5f5</span></li>
                                <li class="color dark" style="background-color: #eeeeee;"><span class="shade expanded">200</span><span class="hex">#eeeeee</span></li>
                                <li class="color dark" style="background-color: #e0e0e0;"><span class="shade">300</span><span class="hex">#e0e0e0</span></li>
                                <li class="color dark" style="background-color: #bdbdbd;"><span class="shade expanded">400</span><span class="hex">#bdbdbd</span></li>
                                <li class="color dark" style="background-color: #9e9e9e;"><span class="shade">500</span><span class="hex">#9e9e9e</span></li>
                                <li class="color" style="background-color: #757575;"><span class="shade expanded">600</span><span class="hex">#757575</span></li>
                                <li class="color" style="background-color: #616161;"><span class="shade">700</span><span class="hex">#616161</span></li>
                                <li class="color" style="background-color: #424242;"><span class="shade expanded">800</span><span class="hex">#424242</span></li>
                                <li class="color" style="background-color: #212121;"><span class="shade expanded">900</span><span class="hex">#212121</span></li>
                            </ul>
                        </div>


                        <div class="color-group col-sm-4 mb-3">
                            <ul class="pl-0">
                                <li class="color main-color" style="background-color: #607d8b;">
                                    <span class="name light-strong">Blue Grey</span>
                                    <span class="shade light-strong">500</span>
                                    <span class="hex light-strong">#607d8b</span>
                                </li>
                                <li class="color dark" style="background-color: #eceff1;"><span class="shade expanded">50</span><span class="hex">#eceff1</span></li>
                                <li class="color dark" style="background-color: #cfd8dc;"><span class="shade">100</span><span class="hex">#cfd8dc</span></li>
                                <li class="color dark" style="background-color: #b0bec5;"><span class="shade expanded">200</span><span class="hex">#b0bec5</span></li>
                                <li class="color dark" style="background-color: #90a4ae;"><span class="shade">300</span><span class="hex">#90a4ae</span></li>
                                <li class="color light-strong" style="background-color: #78909c;"><span class="shade expanded">400</span><span class="hex">#78909c</span></li>
                                <li class="color" style="background-color: #607d8b;"><span class="shade">500</span><span class="hex">#607d8b</span></li>
                                <li class="color" style="background-color: #546e7a;"><span class="shade expanded">600</span><span class="hex">#546e7a</span></li>
                                <li class="color" style="background-color: #455a64;"><span class="shade">700</span><span class="hex">#455a64</span></li>
                                <li class="color" style="background-color: #37474f;"><span class="shade expanded">800</span><span class="hex">#37474f</span></li>
                                <li class="color" style="background-color: #263238;"><span class="shade expanded">900</span><span class="hex">#263238</span></li>
                            </ul>
                        </div>

                        <div class="color-group col-sm-4 mb-3">
                            <ul class="pl-0">
                                <li class="color" style="background-color: #000000;"><span class="shade accent">Black</span><span class="hex">#000000</span></li>
                                <li class="color dark" style="background-color: #ffffff;"><span class="shade accent expanded">White</span><span class="hex">#ffffff</span></li>
                            </ul>
                        </div>
                        <div class="module-end"></div>
                    </div>
                    <!--Color Pallete Ends-->
                </section>
                <section class="color-palette" id="gradient-color">
                    <!--Gradient Color Starts-->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="content-header mb-3">Gradient Color Palette</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col py-4 text-center gradient-strawberry m-1 white font-medium-2 text-bold-400">.gradient-strawberry</div>
                        <div class="col py-4 text-center gradient-blueberry m-1 white font-medium-2 text-bold-400">.gradient-blueberry</div>
                        <div class="col py-4 text-center gradient-mint m-1 white font-medium-2 text-bold-400">.gradient-mint</div>
                        <div class="col py-4 text-center gradient-orange m-1 white font-medium-2 text-bold-400">.gradient-orange</div>
                        <div class="col py-4 text-center gradient-pomegranate m-1 white font-medium-2 text-bold-400">.gradient-pomegranate</div>
                    </div>
                    <div class="row">
                        <div class="col py-4 text-center gradient-green-tea m-1 white font-medium-2 text-bold-400">.gradient-green-tea</div>
                        <div class="col py-4 text-center gradient-blackberry m-1 white font-medium-2 text-bold-400">.gradient-blackberry</div>
                        <div class="col py-4 text-center gradient-plum m-1 white font-medium-2 text-bold-400">.gradient-plum</div>
                        <div class="col py-4 text-center gradient-passion-fruit m-1 white font-medium-2 text-bold-400">.gradient-passion-fruit</div>
                        <div class="col py-4 text-center gradient-sublime-vivid m-1 white font-medium-2 text-bold-400">.gradient-sublime-vivid</div>
                    </div>
                    <div class="row">
                        <div class="col py-4 text-center gradient-king-yna m-1 white font-medium-2 text-bold-400">.gradient-king-yna</div>
                        <div class="col py-4 text-center gradient-summer m-1 white font-medium-2 text-bold-400">.gradient-summer</div>
                        <div class="col py-4 text-center gradient-crystal-clear m-1 white font-medium-2 text-bold-400">.gradient-crystal-clear</div>
                        <div class="col py-4 text-center gradient-celestial m-1 white font-medium-2 text-bold-400">.gradient-celestial</div>
                        <div class="col py-4 text-center gradient-mini m-1 white font-medium-2 text-bold-400">.gradient-mini</div>
                    </div>
                    <div class="row">
                        <div class="col py-4 text-center gradient-ibiza-sunset m-1 white font-medium-2 text-bold-400">.gradient-ibiza-sunset</div>
                        <div class="col py-4 text-center gradient-dawn m-1 white font-medium-2 text-bold-400">.gradient-dawn</div>
                        <div class="col py-4 text-center gradient-brady-brady-fun-fun m-1 white font-medium-2 text-bold-400">.gradient-brady-brady-fun-fun</div>
                        <div class="col py-4 text-center gradient-cosmic-fusion m-1 white font-medium-2 text-bold-400">.gradient-cosmic-fusion</div>
                        <div class="col py-4 text-center gradient-nepal m-1 white font-medium-2 text-bold-400">.gradient-nepal</div>
                    </div>
                    <div class="row">
                        <div class="col py-4 text-center gradient-love-couple m-1 white font-medium-2 text-bold-400">.gradient-love-couple</div>
                        <div class="col py-4 text-center gradient-sunset m-1 white font-medium-2 text-bold-400">.gradient-sunset</div>
                        <div class="col py-4 text-center gradient-grapefruit-sunset m-1 white font-medium-2 text-bold-400">.gradient-grapefruit-sunset</div>
                        <div class="col py-4 text-center gradient-politics m-1 white font-medium-2 text-bold-400">.gradient-politics</div>
                        <div class="col py-4 text-center gradient-red-ocean m-1 white font-medium-2 text-bold-400">.gradient-red-ocean</div>
                    </div>
                    <div class="row">
                        <div class="col py-4 text-center gradient-back-to-earth m-1 white font-medium-2 text-bold-400">.gradient-back-to-earth</div>
                        <div class="col py-4 text-center gradient-flickr m-1 white font-medium-2 text-bold-400">.gradient-flickr</div>
                        <div class="col py-4 text-center gradient-virgin-america m-1 white font-medium-2 text-bold-400">.gradient-virgin-america</div>
                        <div class="col py-4 text-center gradient-purple-bliss m-1 white font-medium-2 text-bold-400">.gradient-purple-bliss</div>
                        <div class="col py-4 text-center gradient-man-of-steel m-1 white font-medium-2 text-bold-400">.gradient-man-of-steel</div>
                    </div>
                    <div class="row">
                        <div class="col py-4 text-center gradient-shdow-night m-1 white font-medium-2 text-bold-400">.gradient-shdow-night</div>
                        <div class="col py-4 text-center gradient-dracula m-1 white font-medium-2 text-bold-400">.gradient-dracula</div>
                        <div class="col py-4 text-center gradient-bloody-mary m-1 white font-medium-2 text-bold-400">.gradient-bloody-mary</div>
                        <div class="col py-4 text-center gradient-harmonic-energy m-1 white font-medium-2 text-bold-400">.gradient-harmonic-energy</div>
                        <div class="col py-4 text-center gradient-purple-love m-1 white font-medium-2 text-bold-400">.gradient-purple-love</div>
                    </div>
                    <div class="row">
                        <div class="col py-4 text-center gradient-indigo-light-blue m-1 font-medium-2 text-bold-400">.gradient-indigo-light-blue</div>
                        <div class="col py-4 text-center gradient-light-blue-indigo m-1 font-medium-2 text-bold-400">.gradient-light-blue-indigo</div>
                        <div class="col py-4 text-center gradient-yellow-green m-1 font-medium-2 text-bold-400">.gradient-yellow-green</div>
                        <div class="col py-4 text-center gradient-orange-deep-orange m-1 font-medium-2 text-bold-400">.gradient-orange-deep-orange</div>
                        <div class="col py-4 text-center gradient-deep-purple-purple m-1 font-medium-2 text-bold-400">.gradient-deep-purple-purple</div>
                    </div>
                    <div class="row">
                        <div class="col py-4 text-center gradient-red-pink m-1 white font-medium-2 text-bold-400">.gradient-red-pink</div>
                        <div class="col py-4 text-center gradient-light-green-amber m-1 font-medium-2 text-bold-400">.gradient-light-green-amber</div>
                        <div class="col py-4 text-center gradient-amber-amber m-1 white font-medium-2 text-bold-400">.gradient-amber-amber</div>
                        <div class="col py-4 text-center gradient-purple-pink m-1 font-medium-2 text-bold-400">.gradient-purple-pink</div>
                        <div class="col py-4 text-center gradient-indigo-dark-blue m-1 white font-medium-2 text-bold-400">.gradient-indigo-dark-blue</div>
                    </div>
                    <div class="row">
                        <div class="col py-4 text-center gradient-teal-cyan m-1 font-medium-2 text-bold-400">.gradient-teal-cyan</div>
                        <div class="col py-4 text-center gradient-blue-grey-blue-grey m-1 white font-medium-2 text-bold-400">.gradient-blue-grey-blue-grey</div>
                        <div class="col py-4 text-center gradient-cyan-dark-green m-1 white font-medium-2 text-bold-400">.gradient-cyan-dark-green</div>
                        <div class="col py-4 text-center gradient-orange-amber m-1 white font-medium-2 text-bold-400">.gradient-orange-amber</div>
                        <div class="col py-4 text-center gradient-indigo-blue m-1 white font-medium-2 text-bold-400">.gradient-indigo-blue</div>
                    </div>
                    <div class="row">
                        <div class="col py-4 text-center gradient-brown-brown m-1 white font-medium-2 text-bold-400">.gradient-brown-brown</div>
                        <div class="col py-4 text-center gradient-blue-grey-blue m-1 white font-medium-2 text-bold-400">.gradient-blue-grey-blue</div>
                        <div class="col py-4 text-center gradient-purple-deep-orange m-1 white font-medium-2 text-bold-400">.gradient-purple-deep-orange</div>
                        <div class="col py-4 text-center gradient-green-teal m-1 white font-medium-2 text-bold-400">.gradient-green-teal</div>
                        <div class="col py-4 text-center gradient-purple-light-blue m-1 white font-medium-2 text-bold-400">.gradient-purple-light-blue</div>
                    </div>
                    <div class="row">
                        <div class="col py-4 text-center gradient-cyan-cyan m-1 font-medium-2 text-bold-400">.gradient-cyan-cyan</div>
                        <div class="col py-4 text-center gradient-yellow-teal m-1 font-medium-2 text-bold-400">.gradient-yellow-teal</div>
                        <div class="col py-4 text-center gradient-purple-deep-purple m-1 white font-medium-2 text-bold-400">.gradient-purple-deep-purple</div>
                        <div class="col py-4 text-center gradient-cyan-light-green m-1 font-medium-2 text-bold-400">.gradient-cyan-light-green</div>
                        <div class="col py-4 text-center gradient-purple-amber m-1 white font-medium-2 text-bold-400">.gradient-purple-amber</div>
                    </div>
                    <div class="row">
                        <div class="col py-4 text-center gradient-indigo-purple m-1 white font-medium-2 text-bold-400">.gradient-indigo-purple</div>
                        <div class="col py-4 text-center gradient-deep-purple-blue m-1 white font-medium-2 text-bold-400">.gradient-deep-purple-blue</div>
                        <div class="col py-4 text-center gradient-deep-orange-orange m-1 white font-medium-2 text-bold-400">.gradient-deep-orange-orange</div>
                        <div class="col py-4 text-center gradient-light-blue-cyan m-1 white font-medium-2 text-bold-400">.gradient-light-blue-cyan</div>
                        <div class="col py-4 text-center gradient-blue-indigo m-1 white font-medium-2 text-bold-400">.gradient-blue-indigo</div>
                    </div>
                    <!--Gradient Color Ends-->
                </section>
            </div>
        </div>
        <!-- END : End Main Content-->

        <!-- BEGIN : Footer-->
        <footer class="footer footer-static footer-light">
            <p class="clearfix text-muted text-sm-center px-2"><span>Copyright  &copy; 2019 <a href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" id="pixinventLink" target="_blank" class="text-bold-800 primary darken-2">PIXINVENT </a>, All rights reserved. </span></p>
        </footer>
        <!-- End : Footer-->

    </div>
</div>
<!-- ////////////////////////////////////////////////////////////////////////////-->

<!-- START Notification Sidebar-->
<aside id="notification-sidebar" class="notification-sidebar d-none d-sm-none d-md-block"><a class="notification-sidebar-close"><i class="ft-x font-medium-3"></i></a>
    <div class="side-nav notification-sidebar-content">
        <div class="row">
            <div class="col-12 mt-1">
                <ul class="nav nav-tabs">
                    <li class="nav-item"><a id="base-tab1" data-toggle="tab" aria-controls="tab1" href="#activity-tab" aria-expanded="true" class="nav-link active">Activity</a></li>
                    <li class="nav-item"><a id="base-tab2" data-toggle="tab" aria-controls="tab2" href="#chat-tab" aria-expanded="false" class="nav-link">Chat</a></li>
                    <li class="nav-item"><a id="base-tab3" data-toggle="tab" aria-controls="tab3" href="#settings-tab" aria-expanded="false" class="nav-link">Settings</a></li>
                </ul>
                <div class="tab-content px-1 pt-1">
                    <div id="activity-tab" role="tabpanel" aria-expanded="true" aria-labelledby="base-tab1" class="tab-pane active">
                        <div id="activity" class="col-12 timeline-left">
                            <h6 class="mt-1 mb-3 text-bold-400">RECENT ACTIVITY</h6>
                            <div id="timeline" class="timeline-left timeline-wrapper">
                                <ul class="timeline">
                                    <li class="timeline-line"></li>
                                    <li class="timeline-item">
                                        <div class="timeline-badge"><span data-toggle="tooltip" data-placement="right" title="Portfolio project work" class="bg-purple bg-lighten-1"><i class="ft-shopping-cart"></i></span></div>
                                        <div class="col s9 recent-activity-list-text"><a href="#" class="deep-purple-text medium-small">just now</a>
                                            <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Jim Doe Purchased new equipments for zonal office.</p>
                                        </div>
                                    </li>
                                    <li class="timeline-item">
                                        <div class="timeline-badge"><span data-toggle="tooltip" data-placement="right" title="Portfolio project work" class="bg-info bg-lighten-1"><i class="fa fa-plane"></i></span></div>
                                        <div class="col s9 recent-activity-list-text"><a href="#" class="cyan-text medium-small">Yesterday</a>
                                            <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Your Next flight for USA will be on 15th August 2015.</p>
                                        </div>
                                    </li>
                                    <li class="timeline-item">
                                        <div class="timeline-badge"><span data-toggle="tooltip" data-placement="right" title="Portfolio project work" class="bg-success bg-lighten-1"><i class="ft-mic"></i></span></div>
                                        <div class="col s9 recent-activity-list-text"><a href="#" class="green-text medium-small">5 Days Ago</a>
                                            <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Natalya Parker Send you a voice mail for next conference.</p>
                                        </div>
                                    </li>
                                    <li class="timeline-item">
                                        <div class="timeline-badge"><span data-toggle="tooltip" data-placement="right" title="Portfolio project work" class="bg-warning bg-lighten-1"><i class="ft-map-pin"></i></span></div>
                                        <div class="col s9 recent-activity-list-text"><a href="#" class="amber-text medium-small">1 Week Ago</a>
                                            <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Jessy Jay open a new store at S.G Road.</p>
                                        </div>
                                    </li>
                                    <li class="timeline-item">
                                        <div class="timeline-badge"><span data-toggle="tooltip" data-placement="right" title="Portfolio project work" class="bg-red bg-lighten-1"><i class="ft-inbox"></i></span></div>
                                        <div class="col s9 recent-activity-list-text"><a href="#" class="deep-orange-text medium-small">2 Week Ago</a>
                                            <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">voice mail for conference.</p>
                                        </div>
                                    </li>
                                    <li class="timeline-item">
                                        <div class="timeline-badge"><span data-toggle="tooltip" data-placement="right" title="Portfolio project work" class="bg-cyan bg-lighten-1"><i class="ft-mic"></i></span></div>
                                        <div class="col s9 recent-activity-list-text"><a href="#" class="brown-text medium-small">1 Month Ago</a>
                                            <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Natalya Parker Send you a voice mail for next conference.</p>
                                        </div>
                                    </li>
                                    <li class="timeline-item">
                                        <div class="timeline-badge"><span data-toggle="tooltip" data-placement="right" title="Portfolio project work" class="bg-amber bg-lighten-1"><i class="ft-map-pin"></i></span></div>
                                        <div class="col s9 recent-activity-list-text"><a href="#" class="deep-purple-text medium-small">3 Month Ago</a>
                                            <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Jessy Jay open a new store at S.G Road.</p>
                                        </div>
                                    </li>
                                    <li class="timeline-item">
                                        <div class="timeline-badge"><span data-toggle="tooltip" data-placement="right" title="Portfolio project work" class="bg-grey bg-lighten-1"><i class="ft-inbox"></i></span></div>
                                        <div class="col s9 recent-activity-list-text"><a href="#" class="grey-text medium-small">1 Year Ago</a>
                                            <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">voice mail for conference.</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div id="chat-tab" aria-labelledby="base-tab2" class="tab-pane">
                        <div id="chatapp" class="col-12">
                            <h6 class="mt-1 mb-3 text-bold-400">RECENT CHAT</h6>
                            <div class="collection border-none">
                                <div class="media mb-1"><a><img alt="96x96" src="app-assets/img/portrait/small/avatar-s-12.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                                    <div class="media-body">
                                        <div class="clearfix">
                                            <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Elizabeth Elliott</h4><span class="medium-small float-right blue-grey-text text-lighten-3">5.00 AM</span>
                                        </div>
                                        <p class="text-muted font-small-3">Thank you</p>
                                    </div>
                                </div>
                                <div class="media mb-1"><a><img alt="96x96" src="app-assets/img/portrait/small/avatar-s-6.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                                    <div class="media-body">
                                        <div class="clearfix">
                                            <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Mary Adams</h4><span class="medium-small float-right blue-grey-text text-lighten-3">4.14 AM</span>
                                        </div>
                                        <p class="text-muted font-small-3">Hello Boo</p>
                                    </div>
                                </div>
                                <div class="media mb-1"><a><img alt="96x96" src="app-assets/img/portrait/small/avatar-s-11.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                                    <div class="media-body">
                                        <div class="clearfix">
                                            <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Caleb Richards</h4><span class="medium-small float-right blue-grey-text text-lighten-3">9.00 PM</span>
                                        </div>
                                        <p class="text-muted font-small-3">Keny !</p>
                                    </div>
                                </div>
                                <div class="media mb-1"><a><img alt="96x96" src="app-assets/img/portrait/small/avatar-s-18.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                                    <div class="media-body">
                                        <div class="clearfix">
                                            <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">June Lane</h4><span class="medium-small float-right blue-grey-text text-lighten-3">4.14 AM</span>
                                        </div>
                                        <p class="text-muted font-small-3">Ohh God</p>
                                    </div>
                                </div>
                                <div class="media mb-1"><a><img alt="96x96" src="app-assets/img/portrait/small/avatar-s-1.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                                    <div class="media-body">
                                        <div class="clearfix">
                                            <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Edward Fletcher</h4><span class="medium-small float-right blue-grey-text text-lighten-3">5.15 PM</span>
                                        </div>
                                        <p class="text-muted font-small-3">Love you</p>
                                    </div>
                                </div>
                                <div class="media mb-1"><a><img alt="96x96" src="app-assets/img/portrait/small/avatar-s-2.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                                    <div class="media-body">
                                        <div class="clearfix">
                                            <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Crystal Bates</h4><span class="medium-small float-right blue-grey-text text-lighten-3">8.00 AM</span>
                                        </div>
                                        <p class="text-muted font-small-3">Can we</p>
                                    </div>
                                </div>
                                <div class="media mb-1"><a><img alt="96x96" src="app-assets/img/portrait/small/avatar-s-3.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                                    <div class="media-body">
                                        <div class="clearfix">
                                            <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Nathan Watts</h4><span class="medium-small float-right blue-grey-text text-lighten-3">9.53 PM</span>
                                        </div>
                                        <p class="text-muted font-small-3">Great!</p>
                                    </div>
                                </div>
                                <div class="media mb-1"><a><img alt="96x96" src="app-assets/img/portrait/small/avatar-s-15.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                                    <div class="media-body">
                                        <div class="clearfix">
                                            <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Willard Wood</h4><span class="medium-small float-right blue-grey-text text-lighten-3">4.20 AM</span>
                                        </div>
                                        <p class="text-muted font-small-3">Do it</p>
                                    </div>
                                </div>
                                <div class="media mb-1"><a><img alt="96x96" src="app-assets/img/portrait/small/avatar-s-19.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                                    <div class="media-body">
                                        <div class="clearfix">
                                            <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Ronnie Ellis</h4><span class="medium-small float-right blue-grey-text text-lighten-3">5.30 PM</span>
                                        </div>
                                        <p class="text-muted font-small-3">Got that</p>
                                    </div>
                                </div>
                                <div class="media mb-1"><a><img alt="96x96" src="app-assets/img/portrait/small/avatar-s-14.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                                    <div class="media-body">
                                        <div class="clearfix">
                                            <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Gwendolyn Wood</h4><span class="medium-small float-right blue-grey-text text-lighten-3">4.34 AM</span>
                                        </div>
                                        <p class="text-muted font-small-3">Like you</p>
                                    </div>
                                </div>
                                <div class="media mb-1"><a><img alt="96x96" src="app-assets/img/portrait/small/avatar-s-13.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                                    <div class="media-body">
                                        <div class="clearfix">
                                            <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Daniel Russell</h4><span class="medium-small float-right blue-grey-text text-lighten-3">12.00 AM</span>
                                        </div>
                                        <p class="text-muted font-small-3">Thank you</p>
                                    </div>
                                </div>
                                <div class="media mb-1"><a><img alt="96x96" src="app-assets/img/portrait/small/avatar-s-22.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                                    <div class="media-body">
                                        <div class="clearfix">
                                            <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Sarah Graves</h4><span class="medium-small float-right blue-grey-text text-lighten-3">11.14 PM</span>
                                        </div>
                                        <p class="text-muted font-small-3">Okay you</p>
                                    </div>
                                </div>
                                <div class="media mb-1"><a><img alt="96x96" src="app-assets/img/portrait/small/avatar-s-9.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                                    <div class="media-body">
                                        <div class="clearfix">
                                            <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Andrew Hoffman</h4><span class="medium-small float-right blue-grey-text text-lighten-3">7.30 PM</span>
                                        </div>
                                        <p class="text-muted font-small-3">Can do</p>
                                    </div>
                                </div>
                                <div class="media mb-1"><a><img alt="96x96" src="app-assets/img/portrait/small/avatar-s-20.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                                    <div class="media-body">
                                        <div class="clearfix">
                                            <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Camila Lynch</h4><span class="medium-small float-right blue-grey-text text-lighten-3">2.00 PM</span>
                                        </div>
                                        <p class="text-muted font-small-3">Leave it</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="settings-tab" aria-labelledby="base-tab3" class="tab-pane">
                        <div id="settings" class="col-12">
                            <h6 class="mt-1 mb-3 text-bold-400">GENERAL SETTINGS</h6>
                            <ul class="list-unstyled">
                                <li>
                                    <div class="togglebutton">
                                        <div class="switch"><span class="text-bold-500">Notifications</span>
                                            <div class="float-right">
                                                <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                                                    <input id="notifications1" checked="checked" type="checkbox" class="custom-control-input">
                                                    <label for="notifications1" class="custom-control-label"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p>Use checkboxes when looking for yes or no answers.</p>
                                </li>
                                <li>
                                    <div class="togglebutton">
                                        <div class="switch"><span class="text-bold-500">Show recent activity</span>
                                            <div class="float-right">
                                                <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                                                    <input id="recent-activity1" checked="checked" type="checkbox" class="custom-control-input">
                                                    <label for="recent-activity1" class="custom-control-label"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                                </li>
                                <li>
                                    <div class="togglebutton">
                                        <div class="switch"><span class="text-bold-500">Notifications</span>
                                            <div class="float-right">
                                                <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                                                    <input id="notifications2" type="checkbox" class="custom-control-input">
                                                    <label for="notifications2" class="custom-control-label"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p>Use checkboxes when looking for yes or no answers.</p>
                                </li>
                                <li>
                                    <div class="togglebutton">
                                        <div class="switch"><span class="text-bold-500">Show recent activity</span>
                                            <div class="float-right">
                                                <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                                                    <input id="recent-activity2" type="checkbox" class="custom-control-input">
                                                    <label for="recent-activity2" class="custom-control-label"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                                </li>
                                <li>
                                    <div class="togglebutton">
                                        <div class="switch"><span class="text-bold-500">Show your emails</span>
                                            <div class="float-right">
                                                <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                                                    <input id="show-emails" type="checkbox" class="custom-control-input">
                                                    <label for="show-emails" class="custom-control-label"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p>Use checkboxes when looking for yes or no answers.</p>
                                </li>
                                <li>
                                    <div class="togglebutton">
                                        <div class="switch"><span class="text-bold-500">Show Task statistics</span>
                                            <div class="float-right">
                                                <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                                                    <input id="show-stats" type="checkbox" class="custom-control-input">
                                                    <label for="show-stats" class="custom-control-label"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</aside>
<!-- END Notification Sidebar-->
@endsection
