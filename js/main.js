
var mainApp = angular.module("mainApp", ['ngRoute','datatables','checklist-model']);
 var url='http://localhost/siakad';
 mainApp.config(function($routeProvider) {
    $routeProvider
        .when('/murid', {
            templateUrl: url+"/murid",
			controller :'murid'
		}).when('/absensimurid', {
        templateUrl: url+"/absensimurid",
  controller :'absensimurid'
}).when('/guru', {
    templateUrl: url+"/guru",
controller :'guru'
}).when('/absensiguru', {
    templateUrl: url+"/absensiguru",
controller :'absensiguru'
}).when('/modul', {
    templateUrl: url+"/modul",
controller :'modul'
})

 });

mainApp.directive('fileModel', ['$parse', function ($parse) {
            return {
               restrict: 'A',
               link: function(scope, element, attrs) {
                  var model = $parse(attrs.fileModel);
                  var modelSetter = model.assign;

                  element.bind('change', function(){
                     scope.$apply(function(){
                        modelSetter(scope, element[0].files[0]);
                     });
                  });
               }
            };
         }]);
		mainApp.service('fileUpload', ['$http', function ($http,$scope) {
    this.uploadFileToUrl = function(judul,gambar,status,deskripsi,uploadUrl){
        var fd = new FormData();
        fd.append('judul', judul);
        fd.append('gambar', gambar);
        fd.append('status', status);
        fd.append('deskripsi', deskripsi);
        $http.post(uploadUrl, fd, {
            transformRequest: angular.identity,
            headers: {'Content-Type': undefined}
        })
        .success(function(data){
			alert("data sukses diupload");
			$http.get("view_galery").success(function(data){
		galery = data;
			});

        })
        .error(function(){
				alert("data gagal di input");
        });

    }

}]);
mainApp.service('fileEdit', ['$http', function ($http,$scope) {
    this.uploadFileToUrl = function(judul,gambar,id,status,deksripsi,uploadUrl){
        var fd = new FormData();
        fd.append('judul', judul);
        fd.append('gambar', gambar);
        fd.append('id', id);
        fd.append('status', status);
        fd.append('deskripsi', deskripsi);
        $http.post(uploadUrl, fd, {
            transformRequest: angular.identity,
            headers: {'Content-Type': undefined}
        })
        .success(function(data){
			alert("data sukses diupload");
			$http.get("view_galery").success(function(data){
		galery = data;
			});

        })
        .error(function(){
				alert("data gagal di input");
        });

    }

}]);

mainApp.controller("murid",function($scope,DTOptionsBuilder,DTColumnBuilder,$http){
	$scope.dtOptions = DTOptionsBuilder.newOptions()
        .withDisplayLength(5)
        .withOption('bLengthChange', false)
        .withOption('autoWidth', false)
        .withOption('scrollX', false);
        $scope.getdata = function(){
        $http.get("lihat_murid").success(function(data){
          $scope.murid= data;
        });
      }
      $scope.tambah = function(){
        var nama = $scope.nama;
        var email = $scope.email;
        var alamat = $scope.alamat;
        var provinsi = $scope.provinsi;
        var kota = $scope.kota;
        $http.post("insert_murid",{kota:kota,nama:nama,email:email,alamat:alamat,provinsi:provinsi}).success(function(){
          alert("data sukes di input");
          $scope.getdata();
          $scope.nama='';
          $scope.email='';
          $scope.alamat='';
          $scope.provinsi='';
          $scope.kota='';
        })
      }
      $scope.edit=function(item){
        $scope.nama=item.nama;
        $scope.email=item.email;
        $scope.alamat=item.alamat;
        $scope.provinsi=item.provinsi;
        $scope.kota = item.kota;
        $scope.id = item.id_murid;
      }
      $scope.actionedit=function(){
        var nama = $scope.nama;
        var email = $scope.email;
        var alamat = $scope.alamat;
        var provinsi = $scope.provinsi;
        var kota = $scope.kota;
        var id = $scope.id;
        $http.post("edit_data_murid",{id:id,nama:nama,email:email,alamat:alamat,provinsi:provinsi,kota:kota}).success(function(){
          alert("data sukses di ubah");
          $scope.getdata();
        })
      }
      $scope.user={
        hapusmurid:[]
      }
      $scope.hapus=function(){
        var id = $scope.user;
        $http.post("hapus_murid",{id:id}).success(function(){
          alert("data sukses dihapus");
          $scope.getdata();
        })
      }
      $scope.getdata();
});
mainApp.controller("absensimurid",function($scope,DTOptionsBuilder,DTColumnBuilder,$http){
	$scope.dtOptions = DTOptionsBuilder.newOptions()
        .withDisplayLength(5)
        .withOption('bLengthChange', false)
        .withOption('autoWidth', false)
        .withOption('scrollX', false);
        $scope.getdata = function(){
        $http.get("lihat_absensimurid").success(function(data){
          $scope.absensimurid= data;
        });
      }
      $scope.getdata();
      $scope.tambah=function(){
        var nama = $scope.nama;
        var keterangan = $scope.keterangan;
        $http.post("insert_absensimurid",{nama:nama,keterangan:keterangan}).success(function(){
          alert("data sukses dimasukkan");
          $scope.getdata();
        })
      }
      $scope.edit=function(item){
        $scope.nama = item.id_murid;
        $scope.keterangan = item.keterangan;
        $scope.id = item.id_absensi_murid;
      }
      $scope.actionedit=function(){
        var nama = $scope.nama;
        var keterangan = $scope.keterangan;
        var id = $scope.id;
        $http.post("ubah_absensimurid",{nama:nama,keterangan:keterangan,id:id}).success(function(){
          alert("data sukses di input");
          $scope.getdata();
        })
      }
      $scope.user={
hapusabsensimurid:[]
      }
      $scope.hapus=function(){
        var id = $scope.user;
        $http.post("hapus_absensimurid",{id:id}).success(function(){
          alert("data sukses dihapus");
          $scope.getdata();
        })
      }
})
mainApp.controller("guru",function($scope,DTOptionsBuilder,DTColumnBuilder,$http){
	$scope.dtOptions = DTOptionsBuilder.newOptions()
        .withDisplayLength(5)
        .withOption('bLengthChange', false)
        .withOption('autoWidth', false)
        .withOption('scrollX', false);
        $scope.getdata = function(){
        $http.get("lihat_guru").success(function(data){
          $scope.guru= data;
        });
      }
      $scope.getdata();
      $scope.tambah=function(){

      }
      $scope.edit=function(item){

      }
      $scope.actionedit=function(){

      }
      $scope.user={
        hapusguru:[]
      }
      $scope.hapus=function(){

      }
});
mainApp.controller("absensiguru",function($scope,DTOptionsBuilder,DTColumnBuilder,$http){
  $scope.dtOptions = DTOptionsBuilder.newOptions()
        .withDisplayLength(5)
        .withOption('bLengthChange', false)
        .withOption('autoWidth', false)
        .withOption('scrollX', false);
        $scope.getdata = function(){
        $http.get("lihat_absensiguru").success(function(data){
          $scope.absensiguru= data;
        });
      }
      $scope.getdata();
      $scope.tambah=function(){
        var nama = $scope.nama;
        var keterangan = $scope.keterangan;
        $http.post("insert_absensiguru",{nama:nama,keterangan:keterangan}).success(function(){
          alert("data sukses di input");
          $scope.getdata();
        })
      }
      $scope.edit=function(item){
        $scope.nama = item.nama;
        $scope.keterangan = item.keterangan;
        $scope.id = item.id_absensi_guru;
      }
      $scope.actionedit=function(){
        var nama = $scope.nama;
        var keterangan = $scope.keterangan;
        var id = $scope.id;
        $http.post("ubah_absensiguru",{nama:nama,keterangan:keterangan,id:id}).success(function(){
          alert("data sukses diubah");
          $scope.getdata();
        })
      }
      $scope.user={
        hapusabsensiguru:[]
      }
      $scope.hapus=function(){
        var id = $scope.user;
        $http.post("hapus_absensiguru",{id:id}).success(function(){
          alert("data sukses di hapus");
          $scope.getdata();
        })
      }

})
mainApp.controller("modul",function($scope,DTOptionsBuilder,DTColumnBuilder,$http){
  $scope.dtOptions = DTOptionsBuilder.newOptions()
        .withDisplayLength(5)
        .withOption('bLengthChange', false)
        .withOption('autoWidth', false)
        .withOption('scrollX', false);
        $scope.getdata = function(){
        $http.get("lihat_modul").success(function(data){
          $scope.modul= data;
        });
      }
      $scope.getdata();
})
