
var mainApp = angular.module("mainApp", ['ngRoute','datatables','firebase','checklist-model']);
 var url='http://localhost/tangankita/home';
 mainApp.config(function($routeProvider) {
    $routeProvider
        .when('/artikel', {
            templateUrl: url+"/artikel",
			controller :'artikel'
		}).when('/event', {
            templateUrl: url+"/event",
			controller :'event'
		}).when('/aboutus', {
            templateUrl: url+"/aboutus",
			controller :'aboutus'
		}).when('/managementuser', {
            templateUrl: url+"/managementuser",
			controller :'managementuser'
		}).when('/slider', {
            templateUrl: url+"/slider",
			controller :'slider'
		}).when('/navbar', {
            templateUrl: url+"/navbar",
			controller :'navbar'
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
    this.uploadFileToUrl = function(judul,event,foto,uploadUrl){
        var fd = new FormData();
        fd.append('foto', foto);
        fd.append('judul', judul);
        fd.append('event', event);
        $http.post(uploadUrl, fd, {
            transformRequest: angular.identity,
            headers: {'Content-Type': undefined}
        })
        .success(function(data){
			alert("sukses");
			$http.get("lihat_event").success(function(data){
		eve = data;
			});
			
        })
        .error(function(){
				alert("data gagal di input");
        });
		
    }
	
}]);
mainApp.service('artikelUpload', ['$http', function ($http,$scope) {
    this.uploadFileToUrl = function(judul,artikel,foto,id,uploadUrl){
        var fd = new FormData();
        fd.append('foto', foto);
        fd.append('judul', judul);
        fd.append('artikel', artikel);
        $http.post(uploadUrl, fd, {
            transformRequest: angular.identity,
            headers: {'Content-Type': undefined}
        })
        .success(function(data){
			alert("sukses");
			$http.get("view_artikel").success(function(data){
		artikelku = data;
			});
			
        })
        .error(function(){
				alert("data gagal di input");
        });
		
    }
	
}]);
mainApp.service('artikelEdit', ['$http', function ($http,$scope) {
    this.uploadFileToUrl = function(judul,artikel,foto,id,uploadUrl){
        var fd = new FormData();
        fd.append('foto', foto);
        fd.append('judul', judul);
        fd.append('artikel', artikel);
        fd.append('id', id);
        $http.post(uploadUrl, fd, {
            transformRequest: angular.identity,
            headers: {'Content-Type': undefined}
        })
        .success(function(data){
			alert("sukses");
			$http.get("view_artikel").success(function(data){
		artikelku = data;
			});
			
        })
        .error(function(){
				alert("data gagal di input");
        });
		
    }
	
}]);
mainApp.service('fileEdit', ['$http', function ($http,$scope) {
    this.uploadFileToUrl = function(id,event,judul,foto,uploadUrl){
        var fd = new FormData();
        fd.append('foto', foto);
        fd.append('id', id);
        fd.append('judul', judul);
        fd.append('event', event);
        $http.post(uploadUrl, fd, {
            transformRequest: angular.identity,
            headers: {'Content-Type': undefined}
        })
        .success(function(data){
			alert("sukses");
			$http.get("lihat_event").success(function(data){
		eve = data;
			});
			
        })
        .error(function(){
				alert("data gagal di input");
        });
		
    }
	
}]);
mainApp.service('sliderUpload', ['$http', function ($http,$scope) {
    this.uploadFileToUrl = function(judul,foto,uploadUrl){
        var fd = new FormData();
        fd.append('foto', foto);
        fd.append('judul', judul);
        $http.post(uploadUrl, fd, {
            transformRequest: angular.identity,
            headers: {'Content-Type': undefined}
        })
        .success(function(data){
			alert("sukses");
			$http.get("lihat_slider").success(function(data){
		sliderku = data;
			});
			
        })
        .error(function(){
				alert("data gagal di input");
        });
		
    }
	
}]);
mainApp.service('sliderEdit', ['$http', function ($http,$scope) {
    this.uploadFileToUrl = function(judul,foto,id,uploadUrl){
        var fd = new FormData();
        fd.append('foto', foto);
        fd.append('judul', judul);
        fd.append('id', id);
        $http.post(uploadUrl, fd, {
            transformRequest: angular.identity,
            headers: {'Content-Type': undefined}
        })
        .success(function(data){
			alert("sukses");
			$http.get("lihat_slider").success(function(data){
		sliderku = data;
			});
			
        })
        .error(function(){
				alert("data gagal di input");
        });
		
    }
	
}]);
mainApp.controller("artikel",function(artikelUpload,artikelEdit,$scope,DTOptionsBuilder,DTColumnBuilder,$http){
	$scope.dtOptions = DTOptionsBuilder.newOptions()
        .withDisplayLength(5)
        .withOption('bLengthChange', false)
        .withOption('autoWidth', false)
        .withOption('scrollX', false);
		$scope.getdata=function(){
			$http.get("view_artikel").success(function(data){
				$scope.artikelku = data;
			});
		
		}
		$scope.getdata();
		$scope.tambah=function(){
			var judul = $scope.judul;
			var artikel = $scope.artikel;
			var foto = $scope.myFile;
			var uploadUrl = "insert_artikel";
			var artikelku = $scope.artikelku;
		artikelUpload.uploadFileToUrl(judul,artikel,foto,uploadUrl);
		$scope.getdata();
		}
		$scope.user = {
	 artikelku:[]
 }
 $scope.hapus=function(){
 var id = $scope.user;
 $http.post("hapus_artikel",{id:id}).success(function(data){
	alert(data);
	$scope.getdata();
 });
 }
 $scope.edit=function(item){
 $scope.judul=item.judul;
 $scope.artikel=item.artikel;
 $scope.id = item.id;
 
 }
 $scope.actionedit=function(){
           var judul = $scope.judul;
			var artikel = $scope.artikel;
			var id = $scope.id;
			var foto = $scope.myFile;
			var uploadUrl = "edit_artikel";
			var artikelku = $scope.artikelku;
		artikelEdit.uploadFileToUrl(judul,artikel,foto,id,uploadUrl);
		
		
 }
});
mainApp.controller("event",function(fileEdit,fileUpload,$scope,DTOptionsBuilder,DTColumnBuilder,$http){
$scope.dtOptions = DTOptionsBuilder.newOptions()
        .withDisplayLength(5)
        .withOption('bLengthChange', false)
        .withOption('autoWidth', false)
        .withOption('scrollX', false);
		$scope.getdata=function(){
			$http.get("lihat_event").success(function(data){
				$scope.eventku = data;
			});
		
		}
		$scope.getdata();
		$scope.tambah=function(){
			var judul = $scope.judul;
			var event = $scope.event;
			var foto = $scope.myFile;
		var uploadUrl = 'insert_event';
		var eventku = $scope.eventku;
		fileUpload.uploadFileToUrl(judul,event,foto,uploadUrl);
		$scope.getdata();
		}
		$scope.edit=function(item){
			$scope.event=item.event;
			$scope.judul=item.judul;
			$scope.id=item.id;
		}
		$scope.actionedit=function(){
			var judul = $scope.judul;
			var event = $scope.event;
			var foto = $scope.myFile;
			var id = $scope.id;
		var uploadUrl = 'edit_event';
		var eventku = $scope.eventku;
		fileEdit.uploadFileToUrl(id,judul,event,foto,uploadUrl);
		$scope.getdata();
		}
		$scope.user = {
	 eventku:[]
 }
 $scope.hapus=function(){
	 var id = $scope.user;
	 $http.post("hapus_event",{id:id}).success(function(){ 
	 alert("event sukses di hapus");
	 $scope.getdata();
	 })
 }
})
mainApp.controller("aboutus",function($scope,DTOptionsBuilder,DTColumnBuilder,$http){
$scope.dtOptions = DTOptionsBuilder.newOptions()
       
		.withDisplayLength(5)
        .withOption('bLengthChange', false)
        .withOption('autoWidth', false)
        .withOption('scrollX', false);
		$scope.getdata=function(){
			$http.get("ambil_editor").success(function(data){
				$scope.aboutus = data;
			});
		
		}
		$scope.ambil=function(){
			$http.get("ambil_edit").success(function(data){
				$scope.edit=data;
			});
		}
		$scope.ambil();
		$scope.getdata();
		$scope.tambah=function(){
			var type=$scope.type;
			var editku = $scope.editku;
			$http.post("insert_editor",{type:type,editor:editku}).success(function(){
				alert("data suskses di input");
				$scope.getdata();
			});
		}
		$scope.edit123=function(item){
			$scope.editku = item.editor;
			$scope.type = item.id_edit;
			$scope.id = item.id;
		}
		$scope.actionedit=function(){
			var type=$scope.type;
			var editku = $scope.editku;
			var id = $scope.id;
			$http.post("edit_editor",{id:id,type:type,editor:editku}).success(function(){
				alert("data suskses di edit");
				$scope.getdata();
			});
		}
			$scope.user = {
	 aboutus:[]
 }
 $scope.hapus=function(){
	 var id = $scope.user;
	 $http.post("hapus_editor",{id:id}).success(function(data){
		alert(data); 
		$scope.getdata();
	 });
 }
});
mainApp.controller("managementuser",function($scope,DTOptionsBuilder,DTColumnBuilder,$http){
$scope.dtOptions = DTOptionsBuilder.newOptions()
       
		.withDisplayLength(5)
        .withOption('bLengthChange', false)
        .withOption('autoWidth', false)
        .withOption('scrollX', false);
		$scope.getdata=function(){
			$http.get("lihat_user").success(function(data){
				$scope.manageuser = data;
			});
		
		}
		$scope.getdata();
		$scope.tambah=function(){
			var firstname = $scope.firstname;
			var lastname = $scope.lastname;
			var email = $scope.email;
			var password = $scope.password;
			$http.post("insert_user",{firstname:firstname,lastname:lastname,email:email,password:password}).success(function(){
				alert("data sukses di input");
				$scope.getdata();
			});
		}
		$scope.user={
			manageuser:[]
		}
		$scope.hapus=function(){
			var id = $scope.user;
			$http.post("hapus_user",{id:id}).success(function(data){
			alert(data);
			$scope.getdata();
			});
			
		}
})
mainApp.controller("slider",function(sliderEdit,sliderUpload,$scope,DTOptionsBuilder,DTColumnBuilder,$http){
$scope.dtOptions = DTOptionsBuilder.newOptions()
       
		.withDisplayLength(5)
        .withOption('bLengthChange', false)
        .withOption('autoWidth', false)
        .withOption('scrollX', false);
		$scope.getdata=function(){
			$http.get("lihat_slider").success(function(data){
				$scope.sliderku = data;
			});
		
		}
		$scope.getdata();
		$scope.tambah = function(){
			var judul = $scope.judul;
			var foto = $scope.myFile;
			var uploadUrl = "insert_slider";
			var sliderku = $scope.sliderku;
			sliderUpload.uploadFileToUrl(judul,foto,uploadUrl);
			$scope.getdata();
		}
		$scope.edit=function(item){
			$scope.id = item.id;
			$scope.judul = item.alt;
		}
		$scope.actionedit=function(){
			var judul = $scope.judul;
			var foto = $scope.myFile;
			var id = $scope.id
			var uploadUrl = "edit_slider";
			var sliderku = $scope.sliderku;
			sliderEdit.uploadFileToUrl(judul,foto,id,uploadUrl);
			$scope.getdata();
		}
		$scope.user={
			sliderku:[]
		}
		$scope.hapus = function(){
			var id = $scope.user;
			$http.post("hapus_slider",{id:id}).success(function(){
			alert("data sukses dihapus");
            $scope.getdata();			
			});
		}
});	
mainApp.controller("navbar",function($scope,DTOptionsBuilder,DTColumnBuilder,$http){
$scope.dtOptions = DTOptionsBuilder.newOptions()
       
		.withDisplayLength(5)
        .withOption('bLengthChange', false)
        .withOption('autoWidth', false)
        .withOption('scrollX', false);
		$scope.getdata=function(){
			$http.get("lihat_navbar").success(function(data){
				$scope.sliderku = data;
			});
		
		}
		$scope.getdata();
});	