

<?php include 'header.php';?>

    <!-- ////////// body area  -->
    <div class="title">

        <h2> Venilla Cake</h2>
    </div>

    <div class="area">

    
<?php
 

 $sql = "SELECT * FROM cake WHERE cake_type='Venilla'";
 $result = $conn->query($sql);
 
 if ($result->num_rows > 0) {
   // output data of each row
   $cake_count=0;
   while($cake = $result->fetch_assoc()) {
       if($cake_count==4){
           break;
       }
       $cake_count ++;

  ?>

        <div class="product">
            <a href="v1.html">
                <div class="img"
                    style=" background:url('<?php echo $cake['img']?>');  background-size: cover; background-position: center; background-repeat: no-repeat; position: relative; margin: 10px; ">
                    <div class="details">
                        <b><?php echo $cake['name']?></b> <br>
                        <?php echo $cake['price']?> TK/Pound

                <button type="button" class="sm-button" onclick="if (confirm('Do you want to checkout ?')) return true; else return false;"> <a href="checkout.html" style="color: white; font-size: 120%;"> Buy Now </a>  </button>

                    </div>

                </div>
            </a>
        </div>


  <?php   }}   ?> 






        <a href="Venilla cake.html"><img src="img/more.jpg" height="300px" width="300px" class="cake" /></a>
    </div>

    <div class="title">
        <h2> chocolate Cake</h2>
    </div>

    <div class="area">
        
           
<?php
 

 $sql = "SELECT * FROM cake WHERE cake_type='chocolate'";
 $result = $conn->query($sql);
 
 if ($result->num_rows > 0) {
   // output data of each row
   $cake_count=0;
   while($cake = $result->fetch_assoc()) {
       if($cake_count==4){
           break;
       }
       $cake_count ++;

  ?>

        <div class="product">
            <a href="v1.html">
                <div class="img"
                    style=" background:url('<?php echo $cake['img']?>');  background-size: cover; background-position: center; background-repeat: no-repeat; position: relative; margin: 10px; ">
                    <div class="details">
                        <b><?php echo $cake['name']?></b> <br>
                        <?php echo $cake['price']?> TK/Pound

                <button type="button" class="sm-button" onclick="if (confirm('Do you want to checkout ?')) return true; else return false;"> <a href="checkout.html" style="color: white; font-size: 120%;"> Buy Now </a>  </button>

                    </div>

                </div>
            </a>
        </div>


  <?php   }}   ?> 

        <a href="chocolate cake.html"><img src="img/more.jpg" height="300px" width="300px" class="cake" /></a>
    </div>
    <div class="title">
        <h2> Battenberg-Layer cake</h2>
    </div>

    <div class="area">
        <div class="product">
            <a href="batt1.html">
                <div class="img"
                    style=" background:url('img/Bettenberg/bett1.jpg');  background-size: cover; background-position: center; background-repeat: no-repeat; position: relative; margin: 10px; ">
                    <div class="details">
                        <b>Battenberg-Layer1.</b> <br>
                        400 TK/Pound

                    </div>

                </div>
            </a>
        </div>
        <div class="product">
            <a href="batt2.html">
                <div class="img"
                    style=" background:url('img/Bettenberg/bett2.jpg');  background-size: cover; background-position: center; background-repeat: no-repeat; position: relative; margin: 10px; ">
                    <div class="details">
                        <b>Battenberg-Layer2.</b> <br>
                        400 TK/Pound

                    </div>

                </div>
            </a>
        </div>
        <div class="product">
            <a href="batt3.html">
                <div class="img"
                    style=" background:url('img/Bettenberg/bett3.jpg');  background-size: cover; background-position: center; background-repeat: no-repeat; position: relative; margin: 10px; ">
                    <div class="details">
                        <b>Battenberg-Layer2.</b> <br>
                        400 TK/Pound

                    </div>

                </div>
            </a>
        </div>


        <a href="Battenberg-Layer cake.html"><img src="img/more.jpg" height="300px" width="300px" class="cake" /></a>
    </div>
    <div class="title">
        <h2> Strawberry cake</h2>
    </div>

    <div class="area">
        <div class="product">
            <a href="straw51.html">
                <div class="img"
                    style=" background:url('img/strawberry/straw1.jpg');  background-size: cover; background-position: center; background-repeat: no-repeat; position: relative; margin: 10px; ">
                    <div class="details">
                        <b>strawberry1.</b> <br>
                        400 TK/Pound

                    </div>

                </div>
            </a>
        </div>
        <div class="area">
            <div class="product">
                <a href="straw2.html">
                    <div class="img"
                        style=" background:url('img/strawberry/straw2.jpg');  background-size: cover; background-position: center; background-repeat: no-repeat; position: relative; margin: 10px; ">
                        <div class="details">
                            <b>strawberry2.</b> <br>
                            400 TK/Pound

                        </div>

                    </div>
                </a>
            </div>
            <div class="area">
                <div class="product">
                    <a href="straw3.html">
                        <div class="img"
                            style=" background:url('img/strawberry/straw3.jpg');  background-size: cover; background-position: center; background-repeat: no-repeat; position: relative; margin: 10px; ">
                            <div class="details">
                                <b>strawberry 3</b> <br>
                                400 TK/Pound

                            </div>

                        </div>
                    </a>
                </div>


                <a href="Strawberry cake.html"><img src="img/more.jpg" height="300px" width="300px" class="cake" /></a>
            </div>
        </div>

        <div class="title">
            <h2> Zebra cake</h2>
        </div>

        <div class="area">

            <div class="product">
                <a href="zebra1.html">
                    <div class="img"
                        style=" background:url('img/zebra/zebra1.jpg');  background-size: cover; background-position: center; background-repeat: no-repeat; position: relative; margin: 10px; ">
                        <div class="details">
                            <b>zebra 1</b> <br>
                            400 TK/Pound

                        </div>

                    </div>
                </a>
            </div>
            <div class="product">
                <a href="zebra2.html">
                    <div class="img"
                        style=" background:url('img/zebra/zebra2.jpg');  background-size: cover; background-position: center; background-repeat: no-repeat; position: relative; margin: 10px; ">
                        <div class="details">
                            <b>zebra 2</b> <br>
                            400 TK/Pound

                        </div>

                    </div>
                </a>
            </div>
            <div class="product">
                <a href="zebra3.html">
                    <div class="img"
                        style=" background:url('img/zebra/zebra3.jpg');  background-size: cover; background-position: center; background-repeat: no-repeat; position: relative; margin: 10px; ">
                        <div class="details">
                            <b>zebra 3</b> <br>
                            400 TK/Pound

                        </div>

                    </div>
                </a>
            </div>

            <a href=" Zebra cake.html"><img src="img/more.jpg" height="300px" width="300px" class="cake" /></a>
        </div>
        <div class="title">
            <h2> Rainbow cake</h2>
        </div>

        <div class="area">
            <div class="product">
                <a href="rain1.html">
                    <div class="img"
                        style=" background:url('img/Rainbow/rain1.jpg');  background-size: cover; background-position: center; background-repeat: no-repeat; position: relative; margin: 10px; ">
                        <div class="details">
                            <b>Rainbow 1</b> <br>
                            400 TK/Pound

                        </div>

                    </div>
                </a>
            </div>
            <div class="product">
                <a href="rain2.html">
                    <div class="img"
                        style=" background:url('img/Rainbow/rain2.jpg');  background-size: cover; background-position: center; background-repeat: no-repeat; position: relative; margin: 10px; ">
                        <div class="details">
                            <b>Rainbow 2</b> <br>
                            400 TK/Pound

                        </div>

                    </div>
                </a>
            </div>
            <div class="product">
                <a href="rain4.html">
                    <div class="img"
                        style=" background:url('img/Rainbow/rain4.jpg');  background-size: cover; background-position: center; background-repeat: no-repeat; position: relative; margin: 10px; ">
                        <div class="details">
                            <b>Rainbow 3</b> <br>
                            400 TK/Pound

                        </div>

                    </div>
                </a>
            </div>

            <a href=" Rainbow cake.html"><img src="img/more.jpg" height="300px" width="300px" class="cake" /></a>
        </div>
        <div class="title">
            <h2> Swiss Roll cake</h2>
        </div>

        <div class="area">
            <div class="product">
                <a href="swis1.html">
                    <div class="img"
                        style=" background:url('img/swiss/swis1.jpg');  background-size: cover; background-position: center; background-repeat: no-repeat; position: relative; margin: 10px; ">
                        <div class="details">
                            <b>swiss Roll 1</b> <br>
                            400 TK/Pound

                        </div>

                    </div>
                </a>
            </div>
            <div class="product">
                <a href="swis2.html">
                    <div class="img"
                        style=" background:url('img/swiss/swis2.jpg');  background-size: cover; background-position: center; background-repeat: no-repeat; position: relative; margin: 10px; ">
                        <div class="details">
                            <b>swiss Roll 2</b> <br>
                            400 TK/Pound

                        </div>

                    </div>
                </a>
            </div>
            <div class="product">
                <a href="swis3.html">
                    <div class="img"
                        style=" background:url('img/swiss/swis3.jpg');  background-size: cover; background-position: center; background-repeat: no-repeat; position: relative; margin: 10px; ">
                        <div class="details">
                            <b>swiss Roll 3</b> <br>
                            400 TK/Pound

                        </div>

                    </div>
                </a>
            </div>


            <a href=" Swiss Roll cake.html"><img src="img/more.jpg" height="300px" width="200px" class="cake" /></a>
        </div>
        <div class="title">
            <h2> Vetvet cake</h2>
        </div>

        <div class="area">
            <div class="product">
                <a href="velvet.html">
                    <div class="img"
                        style=" background:url('img/velvet/vel1.jpg');  background-size: cover; background-position: center; background-repeat: no-repeat; position: relative; margin: 10px; ">
                        <div class="details">
                            <b>velvet 1</b> <br>
                            400 TK/Pound

                        </div>

                    </div>
                </a>
            </div>
            <div class="product">
                <a href="velvet.html">
                    <div class="img"
                        style=" background:url('img/velvet/vel2.jpg');  background-size: cover; background-position: center; background-repeat: no-repeat; position: relative; margin: 10px; ">
                        <div class="details">
                            <b>velvet 2</b> <br>
                            400 TK/Pound

                        </div>

                    </div>
                </a>
            </div>
            <div class="product">
                <a href="velvet.html">
                    <div class="img"
                        style=" background:url('img/velvet/vel3.jpg');  background-size: cover; background-position: center; background-repeat: no-repeat; position: relative; margin: 10px; ">
                        <div class="details">
                            <b>velvet 3</b> <br>
                            400 TK/Pound

                        </div>

                    </div>
                </a>
            </div>

            <a href=" Velvet cake.html"><img src="img/more.jpg" height="300px" width="200px" class="cake" /></a>
        </div>
        <div class="title">
            <h2> Fondant cake</h2>
        </div>

        <div class="area">
            <div class="product">
                <a href="F1.html">
                    <div class="img"
                        style=" background:url('img/fondant/F1.jpg');  background-size: cover; background-position: center; background-repeat: no-repeat; position: relative; margin: 10px; ">
                        <div class="details">
                            <b> F1 </b> <br>
                            400 TK/Pound

                        </div>

                    </div>
                </a>
            </div>
            <div class="product">
                <a href="F2.html">
                    <div class="img"
                        style=" background:url('img/fondant/F2.jpg');  background-size: cover; background-position: center; background-repeat: no-repeat; position: relative; margin: 10px; ">
                        <div class="details">
                            <b> F2 </b> <br>
                            400 TK/Pound

                        </div>

                    </div>
                </a>
            </div>
            <div class="product">
                <a href="F3.html">
                    <div class="img"
                        style=" background:url('img/fondant/F3.jpg');  background-size: cover; background-position: center; background-repeat: no-repeat; position: relative; margin: 10px; ">
                        <div class="details">
                            <b> F3 </b> <br>
                            400 TK/Pound

                        </div>

                    </div>
                </a>
            </div>

            <a href=" Fondant cake.html"><img src="img/more.jpg" height="300px" width="200px" class="cake" /></a>
        </div>

        <div class="title">
            <h2> Rasmalai cake</h2>
        </div>

        <div class="area">
            <div class="product">
                <a href="ras1.html">
                    <div class="img"
                        style=" background:url('img/rasmalai/ras1.jpg');  background-size: cover; background-position: center; background-repeat: no-repeat; position: relative; margin: 10px; ">
                        <div class="details">
                            <b> ras 1 </b> <br>
                            400 TK/Pound

                        </div>

                    </div>
                </a>
            </div>
            <div class="product">
                <a href="ras2.html">
                    <div class="img"
                        style=" background:url('img/rasmalai/ras2.jpg');  background-size: cover; background-position: center; background-repeat: no-repeat; position: relative; margin: 10px; ">
                        <div class="details">
                            <b> ras 3 </b> <br>
                            400 TK/Pound

                        </div>

                    </div>
                </a>
            </div>
            <div class="product">
                <a href="ras3.html">
                    <div class="img"
                        style=" background:url('img/rasmalai/ras3.jpg');  background-size: cover; background-position: center; background-repeat: no-repeat; position: relative; margin: 10px; ">
                        <div class="details">
                            <b> ras 3 </b> <br>
                            400 TK/Pound

                        </div>

                    </div>
                </a>
            </div>

            <a href=" Rasmalai cake.html"><img src="img/more.jpg" height="300px" width="200px" class="cake" /></a>
        </div>
        <div class="title">
            <h2> pistachio cake</h2>
        </div>

        <div class="area">

            <div class="product">
                <a href="pi1.html">
                    <div class="img"
                        style=" background:url('img/pis/pi1.jpg');  background-size: cover; background-position: center; background-repeat: no-repeat; position: relative; margin: 10px; ">
                        <div class="details">
                            <b> pi 1 </b> <br>
                            400 TK/Pound

                        </div>

                    </div>
                </a>
            </div>
            <div class="product">
                <a href="pi2.html">
                    <div class="img"
                        style=" background:url('img/pis/pi2.jpg');  background-size: cover; background-position: center; background-repeat: no-repeat; position: relative; margin: 10px; ">
                        <div class="details">
                            <b> pi 2 </b> <br>
                            400 TK/Pound

                        </div>

                    </div>
                </a>
            </div>
            <div class="product">
                <a href="pi3.html">
                    <div class="img"
                        style=" background:url('img/pis/pi3.jpg');  background-size: cover; background-position: center; background-repeat: no-repeat; position: relative; margin: 10px; ">
                        <div class="details">
                            <b> pi 3 </b> <br>
                            400 TK/Pound

                        </div>

                    </div>
                </a>
            </div>
            <a href=" pistachio cake.html"><img src="img/more.jpg" height="300px" width="200px" class="cake" /></a>
        </div>
        <div class="title">
            <h2> Chiffon cake</h2>
        </div>

        <div class="area">
            <div class="product">
                <a href="chiffon1.html">
                    <div class="img"
                        style=" background:url('img/chiffon/chiffon1.jpg');  background-size: cover; background-position: center; background-repeat: no-repeat; position: relative; margin: 10px; ">
                        <div class="details">
                            <b> chiffon 1 </b> <br>
                            400 TK/Pound

                        </div>

                    </div>
                </a>
            </div>
            <div class="product">
                <a href="chiffon2.html">
                    <div class="img"
                        style=" background:url('img/chiffon/chiffon2.jpg');  background-size: cover; background-position: center; background-repeat: no-repeat; position: relative; margin: 10px; ">
                        <div class="details">
                            <b> chiffon 2</b> <br>
                            400 TK/Pound

                        </div>

                    </div>
                </a>
            </div>
            <div class="product">
                <a href="chiffon3.html">
                    <div class="img"
                        style=" background:url('img/chiffon/chiffon3.jpg');  background-size: cover; background-position: center; background-repeat: no-repeat; position: relative; margin: 10px; ">
                        <div class="details">
                            <b> chiffon 3 </b> <br>
                            400 TK/Pound

                        </div>

                    </div>
                </a>
            </div>

            <a href=" Chiffon cake.html"><img src="img/more.jpg" height="300px" width="200px" class="cake" /></a>
        </div>



</body>

</html>