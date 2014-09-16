{php}
    require_once('include/utils/UserInfoUtil.php');
    global $current_user,$mod_strings;
    $this->assign("ROLENAME", getRoleName($current_user->roleid));
    $this->assign("MOD",$mod_strings);
{/php}



    <link data-require="ng-table@*" data-semver="0.3.0" rel="stylesheet" href="http://bazalt-cms.com/assets/ng-table/0.3.0/ng-table.css" />
    <link data-require="bootstrap-css@*" data-semver="3.0.0" rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" />
        <link rel="stylesheet" href="modules/test2/css/bootstrap.min.css">
        <link rel="stylesheet" href="modules/test2/css/bootstrap-theme.min.css">
       
        <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    
        <script src="modules/test2/js/angular.min.js"></script>
        <script src="modules/test2/ng-table.js"></script>
        
        <link rel="stylesheet" href="modules/test2/ng-table.css">
    


<div ng-controller="DemoCtrl" ng-app="main">
     Grouping by:
    <select ng-model="groupby">
        <option value="---">---</option>
        <option value="adoc_product_display">Product</option>
        <option value="quantity">Quantity</option>
        <option value="price">Price</option>
        
    </select>
    
     
    <br>
    
 
  <br> <button type="button" ng-click="addAdocdetail(user.quantity2);">Add  Adocdetail</button>
  
<br><br>Choose Product :<input type="text" id="adoc_product2_display" ng-model="user.adoc_product2_display" name="adoc_product2_display">
                   <input type="hidden" value="{literal}{{user.adoc_product2}}{/literal}" id="adoc_product2" name="adoc_product2" >
                    <img src="themes/softed/images/select.gif"  alt="Select" title="Select" LANGUAGE=javascript  onclick='return window.open("index.php?module=Products&action=Popup&html=Popup_picker&form=vtlibPopupView&forfield=adoc_product2&srcmodule=","test","width=640,height=602,resizable=0,scrollbars=0,top=150,left=200");' align="absmiddle" style='cursor:hand;cursor:pointer'>
       Choose Quantity : <input id="quantity2" type="text" ng-model="user.quantity2">  
      


    
        <table ng-table="tableParams"  class="table">
         
       <tbody ng-repeat="group in $groups">
        <tr class="ng-table-group">
            <td colspan="{literal}{{$columns.length}}{/literal}">
                <a href="" ng-click="group.$hideRows = !group.$hideRows">
<span class="glyphicon" ng-class="{literal}{ 'glyphicon-chevron-right': group.$hideRows, 'glyphicon-chevron-down': !group.$hideRows }{/literal}"></span>
<strong>{literal}{{ group.value }}{/literal}</strong>
</a>
            </td>
        </tr>
        <tr ng-hide="group.$hideRows" ng-repeat="user in group.data" >
            
           <td data-title="'AdocdetailNo'" sortable="'name'">
                  <a href="index.php?module=Adocdetail&action=DetailView&record={literal}{{user.adocdetailid}}{/literal}">  {literal}{{user.name}}{/literal}</a>
                </td>
                <td data-title="'Nr Line'" sortable="'age'">
                 <span ng-if="!user.$edit">  {literal} {{user.age}} {/literal}</span>
                <div ng-if="user.$edit"><input class="form-control" type="text" ng-model="user.age" /></div>
                </td>
    
                <td data-title="'Product'" >
                {literal}<img ng-if="user.image!=''" src="{{user.image}}" width="50" height="30"/>{/literal}<br/>
               <span ng-if="!user.$edit">
                   {literal}{{user.adoc_product_display}}{/literal}</span>
                <div ng-if="user.$edit">
                    
                  <input type="text" id="adoc_product_display" ng-model="user.adoc_product_display" name="adoc_product_display">
                   <input type="hidden" value="{literal}{{user.adoc_product}}{/literal}" id="adoc_product" name="adoc_product" >
                    <img src="themes/softed/images/select.gif"  alt="Select" title="Select" LANGUAGE=javascript  onclick='return window.open("index.php?module=Products&action=Popup&html=Popup_picker&form=vtlibPopupView&forfield=adoc_product&srcmodule=","test","width=640,height=602,resizable=0,scrollbars=0,top=150,left=200");' align="absmiddle" style='cursor:hand;cursor:pointer'>
                </div>
                </td>
                <td data-title="'Quantity'" sortable="'quantity'">
                  <span ng-if="!user.$edit">  {literal} {{user.quantity}} {/literal}</span>
                   <div ng-if="user.$edit"><input class="form-control" type="text" ng-model="user.quantity" /></div>
                </td>
                 <td data-title="'Price'" sortable="'precio'">
                 {literal} {{user.precio}} {/literal}
                 <input type="hidden" value="{literal}{{user.precio}}{/literal}" id="precio">
                 
                </td>
                <td data-title="'AdocPrice'" sortable="'price'">
                 <span ng-if="!user.$edit">{literal} {{user.price}} {/literal}</span>
                 <div ng-if="user.$edit"><input class="form-control" type="text" ng-model="user.price"/></div>
                
                </td>
                <td data-title="'Disocunt'" sortable="'discount'" >
                   {literal} {{user.discount}} {/literal}

                  
                </td>
              
                 <td data-title="'Adocdtotal'" sortable="'adocdtotal'">
                   {literal} {{(user.quantity*user.price)+(user.quantity*user.price*user.vat)| number:2}} {/literal}
                </td>
               <td data-title="'Adocdtax'" sortable="'adocdtax'">
                   {literal} {{user.quantity*user.price*user.vat |number:2}} {/literal}
                   <input type="hidden" value="{literal}{{user.adocdtax}}{/literal}" id="adocdtax">
                   <input type="hidden" value="{literal}{{user.vat}}{/literal}" id="vat">
                </td>
               <!-- <td data-title="'Adocdtotalamount'" sortable="'adocdtotalamount'">
                   {literal} {{user.adocdtotalamount| number:2}} {/literal}
                </td>-->
              
                 
               <td data-title="'Total'" sortable="'total'" width="90%">
                
                 {literal} {{user.quantity*user.price |number:2}} {/literal}
                </td>
                
                 <td data-title="'Actions'" width="200">
                <a ng-if="!user.$edit" href="" class="btn btn-default btn-xs" ng-click="user.$edit = true">Edit</a>
                <a ng-if="user.$edit" href="" class="btn btn-primary btn-xs" ng-click="user.$edit = false;setEditId(user.discount,user.price,user.pcdetailsid,user.pcquantity,user.pcprice,user.age,user.quantity,user.adocdetailid,user.adocmasterid,user.newtax,user.newadoctotal,user.newadoctotalamount,user.productid,user.adoc_product);">Save</a>
                <a ng-if="user.$edit" href="" class="btn btn-primary btn-xs" ng-click="user.$edit = false;">Cancel</a>
            </td>
             <td>
                [<a href ng:click="removeItem($index,user.adocdetailid)">X</a>]
            </td>
            
        </tr>
        </tbody>
    </table>
    
 
        <script>
            {literal}
                
                var prova7={/literal}{$vleratest}{literal};
                var kURL = "module=Adocmaster&action=AdocmasterAjax&file=ngEdit&shembulli=prova7";
                var kURL2 = "module=Adocmaster&action=AdocmasterAjax&file=ngGetPrice&shembulli=prova7"
              
              
         var record=document.getElementsByName('record').item(0).value;
         var prova7={/literal}{$vleratest}{literal};
        
        var app = angular.module('main', ['ngTable']).
        controller('DemoCtrl', function($scope, $filter,$http,ngTableParams,$sce) {
       { 
          
            
                       
               var data = {/literal}{$vleratest}{literal};
            
             var names = ["john", "bill", "charlie", "robert", "alban", "oscar", "marie", "celine", "brad", "drew", "rebecca", "michel", "francis", "jean", "paul", "pierre", "nicolas", "alfred", "gerard", "louis", "albert", "edouard", "benoit", "guillaume", "nicolas", "joseph"];
             $scope.names=names;
             $scope.titles ={/literal}{$prodiri}{literal}
                 $scope.myData = data;  

       $scope.groupby='---';
         $scope.gridOptions = { 
        data: 'myData',
       
        columnDefs: [{field: 'name'}]
        };
       
                    
        }
                 

            $scope.tableParams = new ngTableParams({
                page: 1,            // show first page
                count: 10 ,// count per page
                sorting: {
                    name: 'asc'     // initial sorting
                }
            }, {
               groupBy: $scope.groupby,
                        total: data.length, // length of data
                        getData: function($defer, params) {
                            
                            var orderedData = params.sorting() ?
                                     $filter('orderBy')(data, params.orderBy()) :
                                data;

                            $defer.resolve(orderedData.slice((params.page() - 1) * params.count(), params.page() * params.count()));
                   $http.get('index.php?'+kURL+'&kaction=retrieve&record='+record).
                    success(function(data, status) {
                      var orderedData = data;
                      params.total(data.length);
                      $defer.resolve(orderedData.slice((params.page() - 1) * params.count(),params.page() * params.count()));
                      
                    
    })
                }
            });
            
  
 
  

            
             $scope.$watch('groupby', function(value){
                        $scope.tableParams.settings().groupBy = value;
                        console.log('Scope Value', $scope.groupby);
                        console.log('Watch value', this.last);
                        console.log('new table',$scope.tableParams);
                        $scope.tableParams.reload();
                    });
                         $http.post('index.php?'+kURL+'&kaction=update&record='+record+'&shembulli='+record
                )
                .success(function(data, status) {
                      $scope.tableParams.reload();
                     
                 });
                   $scope.setEditId =  function(discount,price,pcdetailsid,pcquantity,pcprice,age,quantity,adocdetailid,adocmasterid,newtax,newadoctotal,newadoctotalamount,productid) {
             $http.post('index.php?'+kURL+'&record='+record+'&kaction=update&stato='+age+'&sasia='+quantity+'&adocdetailid2='+adocdetailid+'&adocmasterid2='+adocmasterid+'&newtax2='+newtax+'&newadoctotal2='+newadoctotal+'&newadoctotalamount2='+newadoctotalamount+'&productid2='+productid+'&product2='+document.getElementById('adoc_product').value+'&pcprice2='+pcprice+'&pcquantity2='+pcquantity+'&pcdetailsid2='+pcdetailsid+'&price2='+price+'&discount2='+discount+'&totiduhur='+$scope.getTotal()+'&taxiduhur='+$scope.getTax()+'&totali3='+$scope.getTotal2()
                )
                .success(function(data, status) {
         
                      $scope.tableParams.reload();
                     
                 });
        }
              $scope.setEditId2 =  function(discount,price,pcdetailsid,pcquantity,pcprice,age,quantity,adocdetailid,adocmasterid,newtax,newadoctotal,newadoctotalamount,productid) {
             $http.post('index.php?'+kURL+'&record='+record+'&kaction=update&stato='+age+'&sasia='+quantity+'&adocdetailid2='+adocdetailid+'&adocmasterid2='+adocmasterid+'&newtax2='+newtax+'&newadoctotal2='+newadoctotal+'&newadoctotalamount2='+newadoctotalamount+'&productid2='+productid+'&product2='+document.getElementById('adoc_product').value+'&pcprice2='+pcprice+'&pcquantity2='+pcquantity+'&pcdetailsid2='+pcdetailsid+'&price2='+price+'&discount2='+discount+'&totiduhur='+$scope.getTotal()+'&taxiduhur='+$scope.getTax()+'&totali3='+$scope.getTotal2()
                )
                .success(function(data, status) {
       
                      $scope.tableParams.reload();
                     
                 });
        }
         $scope.addAdocdetail = function(quantity2) {
     
      $scope.tableParams.reload();
    
                  $http.get('index.php?'+kURL2+'&record='+record+'&kaction=doc1&sot='+quantity2+'&sot2='+document.getElementById('adoc_product2').value).
                    success(function(data, status) {
                
                     $scope.prova1 =data;
                   
                          $scope.myData.push({name: 'Adocnew',age:-1,quantity: document.getElementById('quantity2').value,adoc_product_display:document.getElementById('adoc_product2_display').value,adoc_product:document.getElementById('adoc_product2').value,precio:$scope.prova1,price:$scope.prova1,vat:$scope.prova2});
                          $http.post('index.php?'+kURL+'&record='+record+'&kaction=adding&ageadding=-1&quantityadding=5&productadding=22063&sot='+quantity2+'&sot2='+document.getElementById('adoc_product2').value+'&sot5='+$scope.prova1
                )
                .success(function(data, status) {
        
                      $scope.tableParams.reload();
                     
                 });
                 });

                  


    };
     $scope.removeItem = function(index,adocdetailid) {
        $scope.myData.splice(index, 1);
        $scope.tableParams.reload();
        $http.post('index.php?'+kURL+'&kaction=delete&adocdelete='+adocdetailid
                )
              .success(function(data, status) {
        
                      
                     
                 });
    
    }
     $scope.getTotal=function(){
       var total = 0;
       
        angular.forEach($scope.myData, function(user) {
            
            total=total+(user.quantity*user.price);
        
            
        })

       return total;
        
        
 }
     $scope.getTax=function(){
       var total = 0;
       
        angular.forEach($scope.myData, function(user) {
            
            total=total+(user.quantity*user.price*user.vat);
        
            
        })

       return total;
        
        
 }
 $scope.getTotal2=function(){
       var total = 0;
       
        angular.forEach($scope.myData, function(user) {
            
            total=total+(user.quantity*user.price)+(user.quantity*user.price*user.vat);
           
            
        })

       return total;
        
        
 }
 $scope.provat=function(){
     alert('hello');
 }
 $scope.timeout=function() {
    var names = ["john", "bill", "charlie", "robert", "alban", "oscar", "marie", "celine", "brad", "drew", "rebecca", "michel", "francis", "jean", "paul", "pierre", "nicolas", "alfred", "gerard", "louis", "albert", "edouard", "benoit", "guillaume", "nicolas", "joseph"];

    return {
        restrict : 'A',
        require : 'ngModel',
        link : function(scope, iElement, iAttrs) {
            iElement.autocomplete({
                source: names,
                select: function() {
                    $timeout(function() {
                      iElement.trigger('input');
                    }, 0);
                }
            });
    }
    };
}

  
    
        })
     
          
        
        
     
    {/literal}
        </script>
     
      
</div>
