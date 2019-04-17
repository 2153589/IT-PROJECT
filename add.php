<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">Create User</h3>
  </div><!-- /.box-header -->
  <!-- form start -->
  <form class="form-horizontal" method="POST" action="<?php echo base_url($this->layout.'submit');?>">
    <div class="box-body">
      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
        <div class="col-sm-10">
          <input class="form-control input-sm" id="email" name="email"  type="email" required>
        </div>
      </div>
       <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Role</label>
        <div class="col-sm-10">
           <select class="form-control input-sm select2" id="roles" name="roles[]" multiple="true" required>
               <?php echo get_option($roles,'role_name'); ?>
           </select>
        </div>
      </div>

      <!-- may inedit ako dito by gren-->
        <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Application Menu</label>
        <div class="col-sm-10">
            <div class="menu-tree slimScroll">
               <ul>
                 <li><input type='checkbox' id="all" class='flat-red' /> Select All <ul id="menu-all">

                  <!-- original na laman, tanggalin na lang yung . after less than symbol <.?php sidebar_menu(true); ?> -->

<li class="">
  <input type="checkbox" class="flat-red parent parent_15" value="15" name="menu[]" id="menu" />Frontend

  <ul class="">

  <li>
    <input type="checkbox"  id="parent_16_15" class="flat-red child child_15" value="16" name="menu[]" id="menu" />
    Dashboard</li>
  </li>

  <li>
    <input type="checkbox"  id="parent_17_15" class="flat-red child child_15" value="17" name="menu[]" id="menu" />
      Order</li>
  </li>

  <!-- gren start <li>
    <input type="checkbox"  id="parent_18_15" class="flat-red child child_15" value="18" name="menu[]" id="menu" />
      Waitinglist</li>
  </li> gren end -->

  <!-- gren start <li>
    <input type="checkbox"  id="parent_19_15" class="flat-red child child_15" value="19" name="menu[]" id="menu" />
      Member
    </li>
  </li> gren end -->

  <li>
     <input type="checkbox"  id="parent_20_15" class="flat-red child child_15" value="20" name="menu[]" id="menu" />
       My Profile</li>
     </li>

      </ul>

     </a></li>

     <li>
       <input type="checkbox"  id="parent_1_" class="flat-red child child_" value="1" name="menu[]" id="menu" />
            Backend
          </li>
        </li>

        <!-- <li>
          <input type="checkbox"  id="parent_27_" class="flat-red child child_" value="27" name="menu[]" id="menu" />
            Messages
          </li>
        </li> gren -->

        <li class="">
          <input type="checkbox" class="flat-red parent parent_28" value="28" name="menu[]" id="menu" />
          Waitstaff <ul class="">


        <li>
            <input type="checkbox"  id="parent_29_28" class="flat-red child child_28" value="29" name="menu[]" id="menu" />
                Add Order
              </li>

              <li>
                  <input type="checkbox"  id="parent_30_28" class="flat-red child child_28" value="30" name="menu[]" id="menu" />
                      Order Details
                    </li>


            </li> </ul>


        <li class="">
          <input type="checkbox" class="flat-red parent parent_2" value="2" name="menu[]" id="menu" />
          Menus and Table
             <ul class="">

        <!-- <li>
            <input type="checkbox"  id="parent_3_2" class="flat-red child child_2" value="3" name="menu[]" id="menu" />
                Bank
              </li> -->
            </li>
            <li>
              <input type="checkbox"  id="parent_4_2" class="flat-red child child_2" value="4" name="menu[]" id="menu" />
               Category
             </li>
           </li>
           <!-- <li>
             <input type="checkbox"  id="parent_5_2" class="flat-red child child_2" value="5" name="menu[]" id="menu" />
                Credit Card
              </li> -->
            </li>

            <li>
              <input type="checkbox"  id="parent_6_2" class="flat-red child child_2" value="6" name="menu[]" id="menu" />
                Room
                 </li>
            </li>

            <li>
              <input type="checkbox"  id="parent_7_2" class="flat-red child child_2" value="7" name="menu[]" id="menu" />
                Menu
                   </li>
             </li>
            </ul>

             </a>
           </li>

           <li class="">
             <input type="checkbox" class="flat-red parent parent_21" value="21" name="menu[]" id="menu" />
                Sales Report

                  <ul class="">
                    <li>
                      <input type="checkbox"  id="parent_22_21" class="flat-red child child_21" value="22" name="menu[]" id="menu" />
                    Sales By Period
                  </li>
                </li>

                <li>
                  <input type="checkbox"  id="parent_23_21" class="flat-red child child_21" value="23" name="menu[]" id="menu" />
                       Sales By Menu
                     </li>
                   </li>

                   <li>
                     <input type="checkbox"  id="parent_24_21" class="flat-red child child_21" value="24" name="menu[]" id="menu" />
                          Sales By Cashier
                        </li>
                      </li>

                      <li>
                        <input type="checkbox"  id="parent_25_21" class="flat-red child child_21" value="25" name="menu[]" id="menu" />
                       Sales By Payment
                     </li>
                   </li>

                   <li>
                     <input type="checkbox"  id="parent_26_21" class="flat-red child child_21" value="26" name="menu[]" id="menu" />
                         Sales By Branch
                       </li>
                     </li>

                   </ul>
                 </a>
               </li>

               <li class="">
                 <input type="checkbox" class="flat-red parent parent_8" value="8" name="menu[]" id="menu" />
                            Setting
                            <ul class="">
                              <li>
                                <input type="checkbox"  id="parent_9_8" class="flat-red child child_8" value="9" name="menu[]" id="menu" />
                           Application
                         </li>
                       </li>

                       <li>
                         <input type="checkbox"  id="parent_10_8" class="flat-red child child_8" value="10" name="menu[]" id="menu" />
                            Company Profile
                          </li>
                        </li>

                        <li>
                          <input type="checkbox"  id="parent_11_8" class="flat-red child child_8" value="11" name="menu[]" id="menu" />
                              User
                            </li>
                          </li>

                          <li>
                            <input type="checkbox"  id="parent_13_8" class="flat-red child child_8" value="13" name="menu[]" id="menu" />
                              Role
                            </li>
                          </li>

                        <!--  <li>
                            <input type="checkbox"  id="parent_14_8" class="flat-red child child_8" value="14" name="menu[]" id="menu" />
                               Branch
                             </li> gren -->
                        </li>

                 </ul></li>
               </ul>
            </div>
        </div>
      </div>
    </div><!-- /.box-body -->
    <div class="box-footer">
      <a class="btn btn-default btn-sm" href="<?php echo base_url($this->layout.'index');?>"><i class="fa fa-reply"></i> Back</a>
      <button type="submit" class="btn btn-sm btn-primary pull-right"><i class="fa fa-save"></i> Save</button>
    </div><!-- /.box-footer -->
  </form>
</div>
