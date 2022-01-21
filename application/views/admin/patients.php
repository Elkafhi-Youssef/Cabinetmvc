<?php require_once VIEWS_PATH.DS.'views.inc'.DS.'aside.php'; ?>
<?php require_once VIEWS_PATH.DS.'views.inc'.DS.'nav.php';?>
<section class="content">
        <div class="head_content">
            <div class="hamburger_menu">
                <span >
                  <i class="fas fa-bars fa-3x"></i>
              </span></div>
            <div class="search_bar">
                  
                  <div class="search">
                      <input type="text" placeholder="search by name">
                      <span><i class="fas fa-search"></i></span>
                  </div>
            </div>
            <div class="add_doctor">
                <span><i class="fas fa-plus"></i></span>
                <span>Add Doctor</span>
            </div>
        </div>
        <div class="all_doctors">
            <div class="doctor bar_decs">
              <div class="doctor_info">
                  <h4 class="full_name">Image</h4>
                  <h4 class="full_name">Full name</h4>
                  <h4 class="speciality spe">type seckness</h4>
              </div>
              <div class="doctor_operation">
                  <h4 class="Operation">Operation</h4>
                  
              </div>
            </div>
            <?php foreach($data as $data){?>
            <div class="doctor">
              <div class="doctor_info">
                  <img src= "<?php echo URLROOT.DS.'public/images/doctor2.png'; ?>" alt="doctor">
                  <h4 class="full_name"><?php echo $data['fn_patient'];?> </h4>
                  <h4 class="speciality"><?php echo $data['type_sickness'];?></h4>
              </div>
              <div class="doctor_operation">
                  <a href="#" class="button edit"><span><i class="fas fa-user-edit"></i></span> </a>
                  <a href="<?= URLROOT.DS.'AdminPatient'.DS.'deletePatient/'.$data['id_patient']; ?>" class="button"><span>
                      <i class="fas fa-trash-alt"></i>
                  </span></a>
                  <a href="#" class="button"><span><i class="fas fa-eye"></i></span></a>
              </div>
            </div>
            <?php }?>

            
         </div>
      </section>
      <!-- pop up edit -->
      <div class="edit pop editPop">
        <form>
          <div>
              <label>Phone :</label>
          <input type="tel" name="phone" id="phone">
          </div>
          <div>
              <label>Birthday :</label>
              <input type="Date" name="date" id="date">
          </div>
          <div>
              <label>Email :</label>
              <input type="email" name="email" id="email">
          </div>
          <div>
              <label>Address :</label>
              <input type="text" name="address" id="address">
          </div>
          <div>
              <label>
             <img src="<?php echo URLROOT.DS.'public/images/doctor2.png'; ?>" alt=""></label>
          </div>
          <div class="button">
            <button>Edit</button>
          </div>
        </form>
      </div>
      <script>
       
        var editPop =document.querySelectorAll(".doctor_operation .edit");
        const popEdit =document.querySelector('.editPop')
        const divsArr = Array.from(editPop);
        divsArr.forEach( el =>{
        el.addEventListener('click',(e)=>{
                e.preventDefault();
                popEdit.classList.add("showedit")
            })
        })
    </script>
</body>
</html>