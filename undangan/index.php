<?php
//Databse Connection file
include('dbconnection.php');
if (isset($_POST['submit'])) {
	//getting the post values
	$nama = $_POST['nama'];
	$pesan = $_POST['pesan'];
    $kehadiran = $_POST['kehadiran'];

	// Query for data insertion
	$query = mysqli_query($conn, "insert into tbl_pesan(nama, pesan) value ('$nama', '$pesan' )");
	$query2 = mysqli_query($conn, "insert into tbl_kehadiran(nama, kehadiran) value ('$nama', '$kehadiran' )");
	if ($query) {
	    if ($query2) {
		    header('Location : '.'https://andrasatriapratama.com/undangan/index.php?to='.$_GET['to'].'#wedding-message');
	    } else {
    	    echo("Error description: " . mysqli_error($conn));
    	}
	} else {
	    echo("Error description: " . mysqli_error($conn));
	}
}
?>
<DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Mitha & Andra</title>
        <link rel="stylesheet" href="style.css" />
       
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    </head>

    <body">
         <audio id="song" loop>
        <source src="bg.mp3" type="audio/mp3">
    </audio>

        <div class="cover">
            <span class="spacer5"></span>
            <div class="cover-header">
                <div class="title animate__animated animate__fadeInDown">
                    Undangan Pernikahan
                </div>
            </div>
            <div class="cover-content">
                <span class="name animate__animated animate__fadeInLeftBig">Mitha</span>
                <span class="name animate__animated animate__fadeInUpBig">&</span>
                <span class="name animate__animated animate__fadeInRightBig">Andra</span>
            </div>
            <div class="cover-footer">
                <span class="to-invitation animate__animated animate__fadeInUp">Kepada Yth,</span>
                <span class="spacer2"></span>
                <span class="to-invitation animate__animated animate__fadeInUp"><?= $_GET['to']; ?></span>
                <span class="spacer2"></span>
                <a href="#logo-name" id="play-music" class="open-invitation animate__animated animate__fadeInUpBig">Lihat
                    Undangan</a>
                    
            </div>
            <img class="flower-cover-top-left animate__animated animate__fadeIn" src="top-left.png" width="200"
                alt="cover" />
            <img class="flowes-cover-top-right animate__animated animate__fadeIn" src="top-right.png" width="200"
                alt="cover" />
            <img class="flowes-cover-bottom-left animate__animated animate__fadeIn" src="bottom-left.png" width="200"
                alt="cover" />
            <img class="flowes-cover-bottom-right animate__animated animate__fadeIn" src="bottom-right.png" width="200"
                alt="cover" />
        </div>

        <div class="logo-name" id="logo-name">
            <div class="logo-name-container">
                <div class="name name-letter name-letter-m" data-aos="fade-right">M</div>
                <div class="name name-letter name-letter-a" data-aos="fade-left">A</div>
            </div>
            <span class="spacer2"></span>
            <div class="name" data-aos="flip-left">Mitha & Andra</div>
            <span data-aos="fade-right">Sabtu, 22 Juni 2024</span>

            <span class="spacer10"></span>
            <div class="surah" data-aos="fade-right">
                Di antara tanda-tanda (kebesaran)-Nya ialah bahwa Dia menciptakan pasangan-pasangan untukmu dari (jenis)
                dirimu sendiri agar kamu merasa tenteram kepadanya. Dia menjadikan di antaramu rasa cinta dan kasih
                sayang.
                Sesungguhnya pada yang demikian itu benar-benar terdapat tanda-tanda (kebesaran Allah) bagi kaum yang
                berpikir.
            </div>
            <span class="spacer2"></span>
            <div class="surah" data-aos="fade-right">
                (QS. Ar-Rum: 21)
            </div>
            <img class="flower-cover-top-left" data-aos="fade-right" src="top-left.png" width="200" alt="cover" />
            <img class="flowes-cover-top-right" data-aos="fade-left" src="top-right.png" width="200" alt="cover" />
            <img class="flowes-cover-bottom-left" data-aos="fade-right" src="bottom-left.png" width="200" alt="cover" />
            <img class="flowes-cover-bottom-right" data-aos="fade-left" src="bottom-right.png" width="200"
                alt="cover" />
        </div>

        <div class="profile">
            <div class="profile-opener" data-aos="fade-left">بِسْمِ ٱللَّٰهِ ٱلرَّحْمَٰنِ ٱلرَّحِيمِ</div>
            <span class="spacer2"></span>
            <div class="surah" data-aos="fade-right">
                Assalamu'alaikum Warahmatullahi Wabarakatuh
                Dengan memohon rahmat dan ridho Allah Subhanahu Wa Ta’ala, kami menyelenggarakan pernikahan putra dan
                putri
                kami:
            </div>
            <span class="spacer10"></span>
            <div class="profile-fullname" data-aos="fade-right">
                Mitha Angelia AFY, S.Sos.
            </div>
            <div class="profile-text" data-aos="fade-right">
                Putri Dari:
            </div>
            <div class="profile-text" data-aos="fade-right">
                Bapak (Alm) Mesnan Akdanto Franata & Ibu Nelliana Br. Sirait
            </div>
            <span class="spacer10"></span>
            <div class="profile-fullname" data-aos="fade-right">
                Andra Satria Pratama, S.Kom.
            </div>
            <div class="profile-text" data-aos="fade-right">
                Putra Dari:
            </div>
            <div class="profile-text" data-aos="fade-right">
                Bapak Endra Eliono & Ibu Sahni Suningsih
            </div>
            <img class="flower-cover-top-left" data-aos="fade-right" src="top-left.png" width="200" alt="cover" />
            <img class="flowes-cover-top-right" data-aos="fade-left" src="top-right.png" width="200" alt="cover" />
            <img class="flowes-cover-bottom-left" data-aos="fade-right" src="bottom-left.png" width="200" alt="cover" />
            <img class="flowes-cover-bottom-right" data-aos="fade-left" src="bottom-right.png" width="200"
                alt="cover" />
        </div>

        <div class="date-detail">
            <div class="date-detail-title" data-aos="fade-right">
                Hari Yang Ditunggu
            </div>
            <span class="spacer2"></span>
            <div data-aos="fade-right">
                <div>Sabtu, 22 Juni 2024</div>
            </div>
            <span class="spacer5"></span>
            <div data-aos="fade-right">
                <div id="demo" data-aos="flip-down"></div>
            </div>
            <span class="spacer5"></span>
            <h1 class="date-detail-title" data-aos="fade-right">Akad Nikah</h1>
            <span data-aos="fade-right">Jumat, 21 Juni 2024</span>
            <span data-aos="fade-right">11:00 WIB</span>
            <span data-aos="fade-right">Rumah Mempelai Wanita</span>
            <span class="spacer5"></span>
            <h1 class="date-detail-title" data-aos="fade-left">Resepsi</h1>
            <span data-aos="fade-left">Sabtu, 22 Juni 2024</span>
            <span data-aos="fade-left">10:00 WIB</span>
            <span data-aos="fade-left">Rumah Mempelai Wanita</span>

            <span class="spacer5"></span>
            <a href="https://maps.app.goo.gl/niqUvF3Bk8X4KTaw9" target="_blank"
                class="open-invitation animate__animated animate__fadeInUpBig">Lihat
                Lokasi</a>

            <img class="flower-cover-top-left" data-aos="fade-right" src="top-left.png" width="200" alt="cover" />
            <img class="flowes-cover-top-right" data-aos="fade-left" src="top-right.png" width="200" alt="cover" />
            <img class="flowes-cover-bottom-left" data-aos="fade-right" src="bottom-left.png" width="200" alt="cover" />
            <img class="flowes-cover-bottom-right" data-aos="fade-left" src="bottom-right.png" width="200"
                alt="cover" />
        </div>

        <div class="wedding-gift">
            <div class="wedding-gift-title" data-aos="fade-right">
                Hadiah
            </div>
            <span class="spacer10"></span>
            <div class="wedding-gift-content" data-aos="fade-left">Doa Restu Anda merupakan karunia yang sangat berarti
                bagi kami. Dan jika memberi
                adalah ungkapan tanda kasih Anda, Anda dapat memberi kado secara <i>cashless</i></div>
            <span class="spacer10"></span>
            <div class="wedding-gift-content" data-aos="fade-left">0692233425</div>
            <div class="wedding-gift-content" data-aos="fade-left">BNI a/n</div>
            <div class="wedding-gift-content" data-aos="fade-left">MITHA ANGELIA AFY</div>

            <img class="flower-cover-top-left" data-aos="fade-right" src="top-left.png" width="200" alt="cover" />
            <img class="flowes-cover-top-right" data-aos="fade-left" src="top-right.png" width="200" alt="cover" />
            <img class="flowes-cover-bottom-left" data-aos="fade-right" src="bottom-left.png" width="200" alt="cover" />
            <img class="flowes-cover-bottom-right" data-aos="fade-left" src="bottom-right.png" width="200"
                alt="cover" />
        </div>

        <div class="wedding-message" id="wedding-message">
            <div class="wedding-message-title" data-aos="fade-right">
                Ucapan
            </div>
            <span class="spacer2"></span>
            
            <div class="signup-form">
        		<form method="POST">
        			<div class="form-group">
        				<input type="text" class="form-control" name="nama" placeholder="Nama" required="true">
        			</div>
        			<div class="form-group">
        				<textarea class="form-control" name="pesan" rows="4" cols="50" placeholder="Pesan"></textarea>
        			</div>
                    <select name="kehadiran" id="kehadiran">
                      <option value="hadir">Hadir</option>
                      <option value="saab">Tidak Hadir</option>
                    </select>
        			<div class="form-group">
        				<button type="submit" class="btn btn-success btn-lg btn-block" name="submit">Kirim</button>
        			</div>
        		</form>
    	    </div>
    	    
    	    <span class="spacer5"></span>
    	    <table>
    	    <?php
    	    $ret = mysqli_query($conn, "select * from tbl_pesan");
                        $cnt = 1;
                        $row = mysqli_num_rows($ret);
                        if ($row > 0) {
                            while ($row = mysqli_fetch_array($ret)) {

                        ?>
                        <tr>
                            <td><?php echo $row['nama']; ?></td>
                            <td>:</td>
                            <td><?php echo $row['pesan']; ?></td>
                        </tr>
            
            
            <?php }} ?>
            </table>

            <img class="flower-cover-top-left" data-aos="fade-right" src="top-left.png" width="200" alt="cover" />
            <img class="flowes-cover-top-right" data-aos="fade-left" src="top-right.png" width="200" alt="cover" />
            <img class="flowes-cover-bottom-left" data-aos="fade-right" src="bottom-left.png" width="200" alt="cover" />
            <img class="flowes-cover-bottom-right" data-aos="fade-left" src="bottom-right.png" width="200"
                alt="cover" />
        </div>

        <!--<div class="wedding-attendance">
            <div class="wedding-attendance-title" data-aos="fade-right">
                Kehadiran
            </div>
            <span class="spacer10"></span>

            <img class="flower-cover-top-left" data-aos="fade-right" src="top-left.png" width="200" alt="cover" />
            <img class="flowes-cover-top-right" data-aos="fade-left" src="top-right.png" width="200" alt="cover" />
            <img class="flowes-cover-bottom-left" data-aos="fade-right" src="bottom-left.png" width="200" alt="cover" />
            <img class="flowes-cover-bottom-right" data-aos="fade-left" src="bottom-right.png" width="200"
                alt="cover" />
        </div>
        -->

        <div class="end-invitation">
            <div class="end-invitation-title" data-aos="fade-right">
                Terima Kasih
            </div>

            <img class="flower-cover-top-left" data-aos="fade-right" src="top-left.png" width="200" alt="cover" />
            <img class="flowes-cover-top-right" data-aos="fade-left" src="top-right.png" width="200" alt="cover" />
            <img class="flowes-cover-bottom-left" data-aos="fade-right" src="bottom-left.png" width="200" alt="cover" />
            <img class="flowes-cover-bottom-right" data-aos="fade-left" src="bottom-right.png" width="200"
                alt="cover" />
        </div>

        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
       <script>
        var song = document.getElementById("song");
 
        document.getElementById("play-music").onclick = function () {


            if (song != null) {
                playAudio();

            }
        };
        
        function playAudio() {
            song.play()

        }
    </script>
        <script>
            //Script for disabling right click on mouse
            var message = "Function Disabled!";
            function clickdsb() {
                if (event.button == 2) {
                    alert(message);
                    return false;
                }
            }
            function clickbsb(e) {
                if (document.layers || document.getElementById && !document.all) {
                    if (e.which == 2 || e.which == 3) {
                        alert(message);
                        return false;
                    }
                }
            }
            if (document.layers) {
                document.captureEvents(Event.MOUSEDOWN);
                document.onmousedown = clickbsb;
            }
            else if (document.all && !document.getElementById) {
                document.onmousedown = clickdsb;
            }
            
            document.oncontextmenu = new Function("alert(message);return false")
        </script>

        <script>
            // Set the date we're counting down to
            var countDownDate = new Date("Jun 22, 2024 10:00:00").getTime();

            // Update the count down every 1 second
            var x = setInterval(function () {

                // Get today's date and time
                var now = new Date().getTime();

                // Find the distance between now and the count down date
                var distance = countDownDate - now;

                // Time calculations for days, hours, minutes and seconds
                var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                // Output the result in an element with id="demo"
                document.getElementById("demo").innerHTML = days + " <span class='days'>hari</span> | " + hours + " <span class='hours'>jam</span> | "
                    + minutes + " <span class='minutes'>menit</span> | " + seconds + " <span class='seconds'>detik</span>";

                // If the count down is over, write some text 
                if (distance < 0) {
                    clearInterval(x);
                    document.getElementById("demo").innerHTML = "EXPIRED";
                }
            }, 1000);
        </script>
    </body>

    </html>