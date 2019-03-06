app.service('user_id_service', function(){
	var user_id;

	return{
			getProperty: function () {
                return user_id;
            },
            setProperty: function(value) {
                user_id = value;
            }
	};
});