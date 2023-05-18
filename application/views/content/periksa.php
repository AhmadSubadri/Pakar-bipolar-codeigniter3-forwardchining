<div id="home" class="parallax wow fadeIn" data-stellar-background-ratio="0.4"></div>
<div id="service" class="services wow fadeIn">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="inner-services">
                    <div class="rightbox">
                        <div class="rb-container">
                            <ul class="rb">
                                <li class="rb-item active" ng-repeat="itembx">
                                    <div class="timestamp">
                                        Tahap 1
                                    </div>
                                    <div class="item-title">Lengkapi Biodata Anda untuk riwayat pemeriksaan.</div>
                                </li>
                                <li class="rb-item" ng-repeat="itembx">
                                    <div class="timestamp">
                                        Rahap 2
                                    </div>
                                    <div class="item-title">Pilih gejala yang sedang anda alami.</div>
                                </li>

                                <li class="rb-item" ng-repeat="itembx">
                                    <div class="timestamp">
                                        Tahap 3
                                    </div>
                                    <div class="item-title">Hasil pemeriksaan.</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                <div class="appointment-form">
                    <h3><span>+</span> Biodata Periksa</h3>
                    <div class="form">
                        <form action="">
                            <fieldset>

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 select-section">
                                    <div class="row">
                                        <div class="form-group">
                                            <input type="text" id="name" name="nama" placeholder="Your Name" />
                                        </div>
                                        <div class="form-group">
                                            <input type="number" placeholder="Umur anda" id="umur" name="umur" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 select-section">
                                    <div class="row">
                                        <div class="form-group">
                                            <select class="form-control">
                                                <option>Laki-Laki</option>
                                                <option>Perempuan</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="number" placeholder="Nomor Kartu Keluarga" id="kk" name="kk" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="row">
                                        <div class="form-group">
                                            <textarea rows="4" id="textarea_message" class="form-control" placeholder="Alamat anda..."></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="center"><button type="submit">Next</button></div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    @import url("https://fonts.googleapis.com/css2?family=PT+Sans&display=swap");

    li.active {
        color: red;
    }

    nav {
        margin: 2.6em auto;
    }

    nav a {
        list-style: none;
        padding: 35px;
        color: #232931;
        font-size: 1.1em;
        display: block;
        transition: all 0.5s ease-in-out;
    }

    .rightbox {
        /* padding: 0em 34rem 0em 0em; */
        height: 100%;
    }

    .rb-container {
        font-family: "PT Sans", sans-serif;
        width: 100%;
        margin: auto;
        display: block;
        position: absolute;
    }

    .rb-container ul.rb {
        margin: 2.5em 0;
        padding: 0;
        display: inline-block;
    }

    .rb-container ul.rb li {
        list-style: none;
        margin: auto;
        margin-left: 10em;
        min-height: 50px;
        border-left: 1px dashed #fff;
        padding: 0 0 50px 30px;
        position: relative;
    }

    .rb-container ul.rb li:last-child {
        border-left: 0;
    }

    .rb-container ul.rb li::before {
        position: absolute;
        left: -18px;
        top: -5px;
        content: " ";
        border: 8px solid rgba(255, 255, 255, 1);
        border-radius: 500%;
        background: #50d890;
        height: 20px;
        width: 20px;
        transition: all 500ms ease-in-out;
    }

    .rb-container ul.rb li:hover::before {
        border-color: #232931;
        transition: all 1000ms ease-in-out;
    }

    ul.rb li .timestamp {
        color: white;
        position: relative;
        width: 100px;
        font-size: 12px;
    }

    .item-title {
        color: #fff;
    }

    .container-3 {
        width: 5em;
        vertical-align: right;
        white-space: nowrap;
        position: absolute;
    }

    .container-3 input#search {
        width: 150px;
        height: 30px;
        background: #fbfbfb;
        border: none;
        font-size: 10pt;
        color: #262626;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
        margin: 0.9em 0 0 28.5em;
        box-shadow: 3px 3px 15px rgba(119, 119, 119, 0.5);
    }

    .container-3 .icon {
        margin: 1.3em 3em 0 31.5em;
        position: absolute;
        width: 150px;
        height: 30px;
        z-index: 1;
        color: #4f5b66;
    }

    input::placeholder {
        padding: 5em 5em 1em 1em;
        color: #50d890;
    }
</style>