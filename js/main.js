$(function()
	{
		$("#usernis").autocomplete(
		{
			source: "database/get_nis_auto",
			minLength: 3
		});
	}
);
