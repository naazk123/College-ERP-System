<?php
                  require 'db.php';
                            $select = "select * from subject_info  where s_status ='1'";
                             $i=1;
                              if ($result = $con->query($select))
                                 {
                                       while ($data = $result->fetch_assoc())
                                       {
                  echo '<a href="view_subject.php?f_username='.$data["f_username"].'">
                          <i class="fas fa-edit " style="margin-right:3%;color: green" ></i>'
                  ;}}?>