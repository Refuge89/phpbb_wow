<?
   $to = 'cod41479@list.ru'; 
   $ot = 'cod41479@gmail.com'; 
   $subj = '���� ���������'; 
   $mess = '���� ���������'; 

      mail($to, $subj, $mess, "From: ".$ot); 

echo '��������� ���������� �� ������: ' . $to;  
?>