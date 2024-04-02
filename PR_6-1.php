    <form method="POST">
        <input type="number" placeholder="amount" name="val">
        <button type="submit">submit</button>
    </form>
    <?php 
        function calnotes($val){
            $demo=array(1,2,5,10,20,50,100);
            $requirenote=$val;
            $reqdem=0;
            foreach($demo as $i){
                $amt=0;
                $notc=0;
                while($amt<$val){
                    $amt=$amt+$i;
                    $notc++;
                }
                if($amt==$val){
                    if($notc<$requirenote){
                        $requirenote=$notc;
                        $reqdem=$i;
                    }
                }
            }
            return "$requirenote notes of $reqdem for amount $val";
        }
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $val=$_POST['val'];
            $res=calnotes($val);
            echo $res;
        }
    ?>