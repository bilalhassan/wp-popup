<style>
    .left{ float: left;}
    .right {float: right;}
    .center{text-align: center;}
    .width70{ width: 70%;}
    .width25{ width: 25%;}
    .width50{ width: 50%;}
    #gopro{
        width: 100%;
        display: block;
        clear: both;
        padding: 10px;
        margin: 10px 8px 15px 5px;
        border: 1px solid #e1e1e1;
        background: #464646;
        color: #ffffff;
        overflow: hidden;
    }
    #wrapper{
        border: 1px solid #f0f0f0;
        width: 95%;

    }
    #wrapper{
        border: 1px solid #f0f0f0;
        width: 95%;

    }
    table.widefat{
        margin-bottom: 15px;
    }
    table.widefat tr{
        transition: 0.3s all ease-in-out;
        -moz-transition: 0.3s all ease-in-out;
        -webkit-transition: 0.3s all ease-in-out;
    }
    table.widefat tr:hover{
        /*background: #E6E6E6;*/
    }    

    #wrapper input[type='text']{
        width: 80%;
        transition: 0.3s all ease-in-out;
        -moz-transition: 0.3s all ease-in-out;
        -webkit-transition: 0.3s all ease-in-out;
    }
    #wrapper input[type='text']:focus{
        border: 1px solid #1784c9;
        box-shadow: 0 0 7px #1784c9;
        -moz-box-shadow: 0 0 5px #1784c9;
        -webkit-box-shadow: 0 0 5px #1784c9;
    }
    #wrapper input[type='text'].small-text{
        width: 20%;
    }
    .proversion{
        color: red;
        font-style: italic;
    }
    .choose-progress{
        display: none;
    }
</style>

<div id="wrapper">
    <div id="gopro">
        <div class="left">
            <h1><b>WP Popup</b></h1>
            <div>Customizable popup on site load, easily integrates with your contact or subscribe forms</div>
        </div>
        <div class="right">
            <a href="http://smartcatdesign.net/wp-construction-mode-pro-wordpress-plugin/" target="_blank" class="button-primary" style="padding: 40px;line-height: 0;font-size: 20px">GO PRO NOW</a>
        </div>
    </div>
    <div class="width25 right">
        <table class="widefat">
            <thead>
                <tr>
                    <th><?php _e("Support") ?></th>
                </tr>
                <tr>
                    <td>
                        <?php
                        _e("Do you have any questions ? Do you need any help ? Let us know on our website!");
                        ?>
                    </td>
                </tr>
                <tr>
                    <td class='center'>
                        <a href='http://smartcatdesign.net/under-construction-maintenance-mode-free-wordpress-plugin/' target='_blank' class='button-primary'>Support</a>
                    </td>
                </tr>
            </thead>
        </table>
        <table class="widefat">
            <thead>
                <tr>
                    <th><?php // _e("Pro Version") ?> <span class='proversion'></span></th>
                </tr>
                <tr>
                    <td>
                        <?php
//                            _e("With the pro version, you get the ability to add cool animations, and additional icons for Instagram, Digg, Flickr, Skype, Tumblr and Youtube");
                        ?>
                    </td>
                </tr>
            </thead>
        </table>
    </div>
    <div class="width70 left">
        <form name="post_form" method="post" action="" enctype="multipart/form-data">
            <table class="widefat">
                <thead>
                    <tr>
                        <th colspan="2">General Settings</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php _e('Set Under Construction') ?></td>
                        <td>
                            <select name="set_opt" id="set_opt">
                                
                            </select>
                        </td>
                    </tr>
                </tbody>

            </table>


        </form>
    </div>    
</div>