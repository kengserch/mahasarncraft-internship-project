<div id="map_canvas"></div>   
<style>
.hidden{
  display: none !important;
}
</style>
<script src="//unpkg.com/jquery@3.2.1"></script>

<script type="text/javascript">
var iconLetter = ['a','b','c','d'];
var place_Marker = [];
var pos;
var posPlace;
var map; // กำหนดตัวแปร map ไว้ด้านนอกฟังก์ชัน เพื่อให้สามารถเรียกใช้งาน จากส่วนอื่นได้  
var GGM; // กำหนดตัวแปร GGM ไว้เก็บ google.maps Object จะได้เรียกใช้งานได้ง่ายขึ้น  
var my_Marker;  // กำหนดตัวแปรเก็บ marker ตำแหน่งปัจจุบัน หรือที่ระบุ  
var service;
var origins = [];
var destinations = [];
function initialize() { // ฟังก์ชันแสดงแผนที่  
    GGM=new Object(google.maps); // เก็บตัวแปร google.maps Object ไว้ในตัวแปร GGM  
    
   service = new GGM.DistanceMatrixService();
    // เรียกใช้คุณสมบัติ ระบุตำแหน่ง ของ html 5 ถ้ามี    
    if(navigator.geolocation){    
              
            // หาตำแหน่งปัจจุบันโดยใช้ getCurrentPosition เรียกตำแหน่งครั้งแรกครั้งเดียวเมื่อเปิดมาหน้าแผนที่
            navigator.geolocation.getCurrentPosition(function(position){    
                var myPosition_lat=position.coords.latitude; // เก็บค่าตำแหน่ง latitude  ปัจจุบัน  
                var myPosition_lon=position.coords.longitude;  // เก็บค่าตำแหน่ง  longitude ปัจจุบัน           
                  
                sessionStorage.latitude =  position.coords.latitude ;
                sessionStorage.longitude =  position.coords.longitude ;


                // สรัาง LatLng ตำแหน่ง สำหรับ google map  
                pos = new GGM.LatLng(myPosition_lat,myPosition_lon);    
                origins = [];
                origins.push(pos);             
                  
                // กำหนด DOM object ที่จะเอาแผนที่ไปแสดง ที่นี้คือ div id=map_canvas  
              
                var my_DivObj=$("#map_canvas")[0];   
                  
                // กำหนด Option ของแผนที่  
                var myOptions = {  
                    zoom: 13, // กำหนดขนาดการ zoom  
                    center: pos , // กำหนดจุดกึ่งกลาง  เป็นจุดที่เราอยู่ปัจจุบัน
                    mapTypeId:GGM.MapTypeId.ROADMAP, // กำหนดรูปแบบแผนที่  
                    mapTypeControlOptions:{ // การจัดรูปแบบส่วนควบคุมประเภทแผนที่  
                        position:GGM.ControlPosition.RIGHT, // จัดตำแหน่ง  
                        style:GGM.MapTypeControlStyle.DROPDOWN_MENU // จัดรูปแบบ style   
                    }  
                };  
           
                map = new GGM.Map(my_DivObj,myOptions);// สร้างแผนที่และเก็บตัวแปรไว้ในชื่อ map                      
                
               my_Marker = new GGM.Marker({ // สร้างตัว marker  
                    position: pos,  // กำหนดไว้ที่เดียวกับจุดกึ่งกลาง  
                    map: map, // กำหนดว่า marker นี้ใช้กับแผนที่ชื่อ instance ว่า map  
                    // icon:"//www.ninenik.com/demo/google_map/images/male-2.png",  
                    icon:"img/navi_icon2.png",  
                    draggable:true, // กำหนดให้สามารถลากตัว marker นี้ได้  
                    title:"คลิกลากเพื่อหาตำแหน่งจุดที่ต้องการ!" // แสดง title เมื่อเอาเมาส์มาอยู่เหนือ  
                });                  
                  
                for( i = 0;i<arr_Destination.length;i++){    
                    var htmlTr = '<tr><td>'+arr_Destination[i].title+'</td><td class="place_distance"></td></tr>';
                    $("#placeData").append(htmlTr);
 
                    posPlace = new GGM.LatLng(arr_Destination[i].lat,arr_Destination[i].lng);     
                    destinations.push(posPlace);
 
                    place_Marker[i] = new GGM.Marker({ // สร้างตัว marker  
                        position: posPlace,  // กำหนดไว้ที่เดียวกับจุดกึ่งกลาง  
                        map: map, // กำหนดว่า marker นี้ใช้กับแผนที่ชื่อ instance ว่า map  
                        icon:"img/navi_icon_"+iconLetter[i]+".png"
                    });         
                }       
                 
                service.getDistanceMatrix(
                  {
                    origins: origins,
                    destinations: destinations,
                    travelMode: 'DRIVING',
                    avoidHighways: true,
                    avoidTolls: true,
                  }, callback);                      
                  
                  
                // กำหนด event ให้กับตัว marker เมื่อสิ้นสุดการลากตัว marker ให้ทำงานอะไร
              /*  GGM.event.addListener(my_Marker, 'dragend', function() {
                    var my_Point = my_Marker.getPosition();  // หาตำแหน่งของตัว marker เมื่อกดลากแล้วปล่อย
                    map.panTo(my_Point);  // ให้แผนที่แสดงไปที่ตัว marker           
                    origins = [];
                    origins.push(my_Point);     
                         
                    service.getDistanceMatrix(
                      {
                        origins: origins,
                        destinations: destinations,
                        travelMode: 'DRIVING',
                        avoidHighways: true,
                        avoidTolls: true,
                      }, callback);                          
 
                });     
                                  
                // กำหนด event ให้กับตัวแผนที่ เมื่อมีการเปลี่ยนแปลงการ zoom  
                GGM.event.addListener(map, "zoom_changed", function() {  
                    $("#zoom_value").val(map.getZoom()); // เอาขนาด zoom ของแผนที่แสดงใน textbox id=zoom_value    
                });                  
                  */
            },function() {    
                // คำสั่งทำงาน ถ้า ระบบระบุตำแหน่ง geolocation ผิดพลาด หรือไม่ทำงาน    
            });    
          
            // ให้อัพเดทตำแหน่งในแผนที่อัตโนมัติ โดยใช้งาน watchPosition
            // ค่าตำแหน่งจะได้มาเมื่อมีการส่งค่าตำแหน่งที่ถูกต้องกลับมา
            /*
            navigator.geolocation.watchPosition(function(position){    
   
                var myPosition_lat=position.coords.latitude; // เก็บค่าตำแหน่ง latitude  ปัจจุบัน  
                var myPosition_lon=position.coords.longitude;  // เก็บค่าตำแหน่ง  longitude ปัจจุบัน  
                                 
                // สรัาง LatLng ตำแหน่งปัจจุบัน watchPosition
                pos = new GGM.LatLng(myPosition_lat,myPosition_lon);     
                 orgins = [];
                 origins.push(pos);    
                         
                service.getDistanceMatrix(
                  {
                    origins: origins,
                    destinations: destinations,
                    travelMode: 'DRIVING',
                    avoidHighways: true,
                    avoidTolls: true,
                  }, callback);                          
                 
                // ให้ marker เลื่อนไปอยู่ตำแหน่งปัจจุบัน ตามการอัพเดทของตำแหน่งจาก watchPosition
              
              my_Marker.setPosition(pos);
 
                map.panTo(pos); // เลื่อนแผนที่ไปตำแหน่งปัจจุบัน  
                map.setCenter(pos);  // กำหนดจุดกลางของแผนที่เป็น ตำแหน่งปัจจุบัน                   
                
                  
            },function() {    
                // คำสั่งทำงาน ถ้า ระบบระบุตำแหน่ง geolocation ผิดพลาด หรือไม่ทำงาน    
            });    
            */
    }else{    
         // คำสั่งทำงาน ถ้า บราวเซอร์ ไม่สนับสนุน ระบุตำแหน่ง    
         alert("เบราว์เซอร์ไม่สนับสนุนการทำงาน");
    }     
  
  
   
}  

function callback(response, status) {
    if(status=='OK'){       
        console.log(response.rows);
        var b= 0 ;

        var txt_active =  response.rows[0].elements[0].distance.value ;
        var txt_activeele =  '1'; 

        $.each(response.rows[0].elements,function(i,elm){
            // console.log(i);
            console.log(elm);
            b++;
            // $(".place_distance:eq("+i+")").text(elm.distance.text);
            $(".place"+b).text(elm.distance.text);
              
            
            //$(".txt_nearme").addClass("hidden"); 
            if(  elm.distance.value <  txt_active ){
                txt_active = elm.distance.value ;
                txt_activeele = b;
            } else{
              // $(".txt_nearme"+b).addClass("hidden");

            }
        });
        $(".txt_nearme"+txt_activeele).removeClass("hidden");



        var maplatlongs='' ;
        var z = 0 ;
        for( i = 0;i<arr_Destination.length;i++){    
          z++;
            // var htmlTr = '<tr><td>'+arr_Destination[i].title+'</td><td class="place_distance"></td></tr>';
            // $("#placeData").append(htmlTr);

            // posPlace = new GGM.LatLng(arr_Destination[i].lat,arr_Destination[i].lng);     
            // destinations.push(posPlace);

            // place_Marker[i] = new GGM.Marker({ // สร้างตัว marker  
            //     position: posPlace,  // กำหนดไว้ที่เดียวกับจุดกึ่งกลาง  
            //     map: map, // กำหนดว่า marker นี้ใช้กับแผนที่ชื่อ instance ว่า map  
            //     icon:"img/navi_icon_"+iconLetter[i]+".png"
            // });   
            // console.log('arr_Destination::'+i+':' )  
            maplatlongs += '/'+arr_Destination[i].lat+','+arr_Destination[i].lng  ;

            // console.log('arr_Destination::'+i+':'+maplatlongs )  
           var link = 'https://www.google.com/maps/dir/'+ sessionStorage.latitude +','+sessionStorage.longitude+'/'+arr_Destination[i].lat+','+arr_Destination[i].lng+'';

              $("#link_navigatesub_"+z).attr('href',link);
            
        }       

        
        var link = 'https://www.google.com/maps/dir/'+sessionStorage.latitude +','+sessionStorage.longitude + maplatlongs;
 
       // document.getElementById("link_navigate3").setAttribute('href',link); 
        document.getElementById("link_navigate4").setAttribute('href',link); 


        setImgActive(txt_activeele);

        console.log( txt_activeele +":"+txt_active ) ;
    }
}
$(function(){  
 
    $("<script/>", {  
      "type": "text/javascript",   
      src: "//maps.google.com/maps/api/js?v=3.2&key=AIzaSyDhLo4479JnUtxzVck6-Wx0i6VLS1VyLKk&sensor=false&language=th&callback=initialize"
    }).appendTo("body");      
});
 </script>


 