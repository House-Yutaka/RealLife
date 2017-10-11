          // HTML要素を変換
          var mapDiv = document.getElementById( "map-canvas" ) ;
          // 下記がアクセス時に反映される場所と解像度
          var map = new google.maps.Map( mapDiv, {
              center: new google.maps.LatLng( 35.7100, 139.8107 ) ,
              zoom: 5 ,
          });


          function getLatLng(place,pic) {
           //  contentStr = '<div style="width: 80px; height: 80px;">'
           // + '<p><a href="index.html"><img src="images/' + pic + '" width="70"></a></p>';

              // ジオコーダのコンストラクタ
              var geocoder = new google.maps.Geocoder();
              // geocodeリクエストを実行。
              // 第１引数はGeocoderRequest。
              // 第２引数はコールバック関数。
              geocoder.geocode({
                address: place
              }, function(results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                  var bounds = new google.maps.LatLngBounds();
            
                  for (var i in results) {
                    if (results[i].geometry) {
            
                      // 緯度経度を取得
                      var latlng = results[i].geometry.location;

                      // 住所を取得
                      var address = results[i].formatted_address.replace(/^日本, /, '');
                      bounds.extend(latlng);
            
                      var infowindow = new google.maps.InfoWindow({
                        content: pic
                      });

                      var positionMaker = new google.maps.Marker({
                        position: latlng,
                        map: map
                      });
                      
                      google.maps.event.addDomListener(positionMaker,"click", function(){
                      infowindow.open(map,positionMaker);
                      });
                    }
                  }
            
                  // 範囲を移動
                  map.fitBounds(bounds);
                  // ズーム値を手動で設定
                  map.setZoom(4);
            
                } else if (status == google.maps.GeocoderStatus.ERROR) {
                  alert("GoogleMap 通信エラー 505");
                } else if (status == google.maps.GeocoderStatus.INVALID_REQUEST) {
                  alert("GoogleMap リクエストエラー 506 ¥n該当の場所は検索できません。");
                } else if (status == google.maps.GeocoderStatus.OVER_QUERY_LIMIT) {
                  alert("GoogleMap リクエストエラー 507 ¥n時間を置いて再度、検索してください");
                } else if (status == google.maps.GeocoderStatus.REQUEST_DENIED) {
                  alert("GoogleMap リクエストエラー 508 ¥nリクエストが拒否されました");
                } else if (status == google.maps.GeocoderStatus.UNKNOWN_ERROR) {
                  alert("GoogleMap エラー 509 ¥n予期せぬエラーが発生しました");
                } else if (status == google.maps.GeocoderStatus.ZERO_RESULTS) {
                  alert("GoogleMap エラー 510 ¥n該当の場所は検索できません");
                } else {
                  alert("GoogleMap エラー 509 ¥n予期せぬエラーが発生しました");
                }
              });
            }