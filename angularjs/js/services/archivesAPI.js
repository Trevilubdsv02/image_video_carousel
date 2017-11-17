app.factory("archivesAPI",['$http', 'configPath', function($http, configPath) {
    var _insertArchive = function (formData)
    {
        return $http({
             method  : 'POST',
             url     : configPath.urlBase + "/API/contacts/register",
             data    : formData, // pass in data as strings
             headers : { 'Content-Type': 'application/json' }  // set the headers so angular passing info as form data (not request payload)
            });
    }
    
    
    
    
    
    return
    {
        insertArchive: _insertArchive
    }
}]);