public function filterSalons(Request $request)
    {
        $city_id = $request->city_id;
        $region_id = $request->region_id;
        $category_id = $request->category_id;
        $main_service_id = $request->main_service_id;
        //
        $builder = Salon::where('type', $request->type)->whereHas('city', function ($q) {
            $q->where('country_id', session()->get('country'));
        });
        if ($city_id) {
            $builder->where('city_id', $city_id);
            $regions = Region::where('city_id', $city_id)->get();
        }else{
            $regions = Region::get();
        }
        //==
        if ($region_id) {
            $services_ids_in_region= ServiceRegion::where('region_id',$region_id)->pluck('service_id');
            $builder->whereHas('services', function ($query) use ($services_ids_in_region) {
                $query->whereIn('id', $services_ids_in_region);
            });
        }else{
            $services_ids_in_region= ServiceRegion::pluck('service_id');
            $builder->whereHas('services', function ($query) use ($services_ids_in_region) {
                $query->whereIn('id', $services_ids_in_region);
            });
        }
        //==
        if ($category_id) {
            $main_services = MainService::where('category_id', $category_id)->get();
            $main_services_ids = MainService::where('category_id', $category_id)->pluck('id');
            $builder->whereHas('services', function ($query) use ($main_services_ids) {
                $query->whereIn('main_service_id', $main_services_ids);
            });
        }else {
            $main_services = MainService::get();
        }
        if($main_service_id){
            $builder->whereHas('services', function ($query) use ($main_service_id) {
                $query->where('main_service_id', $main_service_id);
            });
        }
        $salons = $builder->orderBy('rate','desc')->get();
        return response()->json([
            'salons' => $salons,
            'main_services' => $main_services,
            'regions' => $regions,
        ]);

    }

    ///////////////
    url: "{{url('filter-salons')}}" + '?type=' + type + '&city_id=' + city_id + '&region_id=' + region_id + '&category_id=' + category_id + '&main_service_id=' + main_service_id,

    ده الريكوست اللي في الاجاكس
    ///////////
    $(document).on('click', '.city', function () {
        var type = $("#type").val();
        var city_id = $(this).attr("city_id");
        var region_id = $('.region:checked').attr("region_id");
        var category_id = $('.category:checked').attr("category_id");
        var main_service_id = $('.main_service:checked').attr("main_service_id");

        if (city_id || region_id || category_id || main_service_id) {
            $.ajax({
                type: "GET",
                url: "{{url('filter-salons')}}" + '?type=' + type + '&city_id=' + city_id + '&region_id=' + region_id + '&category_id=' + category_id + '&main_service_id=' + main_service_id,
                success: function (result) {
                    if (result) {
                        console.log(result);
                        $(".salons_page").empty();
                        $.each(result.salons, function ($key, $value) {
                            plus_salon($value.id, $value.name, $value.image, $value.description, $value.type, $value.rate);
                        });
                        if (result.regions.length > 0) {
                            $(".region2").remove();
                            $.each(result.regions, function (key2, value2) {
                                plus_region(value2.id, value2.name)
                            });
                        }else{
                            $(".region2").remove();
                        }
                    }
                    if (result.length === 0) {
                        console.log("datazero");
                    }
                }
            });
        }
    });