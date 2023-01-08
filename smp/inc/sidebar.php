<aside id="sidebar">

            <?php
                if(isset($_POST['login']))
                {
                    login($_POST['email'],$_POST['fjalekalimi']);
                }
            ?>
            <form id="login" action="" method="post" class="box">
                <legend>Forma për hyrje</legend>
                <label>Email: </label>
                <input type="email" name="email" id="email">
                <label>Fjalekalimi: </label>
                <input type="password" name="fjalekalimi" id="fjalekalimi">
                <input type="submit" name="login" id="login" value="Kycu">
            </form>
            <section class="box">
                <h3 class="title">SMP ka këto funksionalitete:</h3>
                <ol>
                    <li>Menaxhimin e anetareve(Shtimin| Fshirjen | Modifikimin)</li>
                    <li>Menaxhimin e projekteve(Shtimin| Fshirjen | Modifikimin)</li>
                    <li>Menaxhimin e puneve(Shtimin| Fshirjen | Modifikimin)</li>
                    <li>Hyrjen dhe Daljen nga sistemi</li>
                    <li>Menaxhime te tjera</li>
                </ol>
                <hr>
                <h3 class="title">Trajnimi Web Development ofron:</h3>
                <ul>
                    <li>HTML & CSS</li>
                    <li>JavaScript & jQuery</li>
                    <li>PHP & MySQL</li>
                    <li>Kodimi i projektit real SMP</li>
                    <li>Kodimi i projektit real Rent a Car</li>
                    <li>Detajet e trajnimit - 
                        <a href="https://probitacademy.com/courses/web-development-full-stack/">Probit Academy</a>
                    </li>
                    
                </ul>                    
            </section>

        </aside>