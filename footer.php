<?php include_once('config.php'); ?>
<footer>
        <div class="lower-bar">
            <div class="contactme">
                <p class="cm_heading">CONTACT ME :</p>
            </div>
            <div class="contact">
              <table>
                <tbody>
                    <?php foreach($contactme['contacts'] as $contact){ ?>
                    <tr>
                        <td><img src="./assets/images/<?php echo $contact['contact-img']; ?>" alt=""></td>
                        <td><?php echo $contact['contact-name']; ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
              </table>
            </div>
            <div class="message">
                <p class="msg_heading">GET IN TOUCH :</p>
            </div>
            <div class="contact-form">
                <form action="./index.html" method="GET">
                    <div>
                        <label for="name">Name</label>
                        <input required type="text" name="name">
                    </div>
                    <div>
                        <label for="email">Email</label>
                        <input required type="email" name="email">
                    </div>
                    <div>
                        <label for="mobile">Mobile</label>
                        <input required type="text" name="mobile">
                    </div>
                    <div class="address">
                        <label for="address">Address</label>
                        <textarea name="address" id="" ></textarea>
                    </div>
                    <div class="form-submit">
                        <button >SUBMIT</button>
                    </div>    
            </form>
            </div>
        </div>
</footer>