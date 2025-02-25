<?
if( $_COOKIE["lang"] !== null )
$lang = $_COOKIE["lang"];
if( $lang !== null )
include_once "../lang_packs/" . $lang . ".php";
?>
// OBJECTS
// Central Tower coords
	let centralTower = [
			{coordinates:[3599,3860],popup:"<?=$localization['objects']['centtower']?>"}
		];
	let centralTowerToggle = [];

// Cocoon coords
	let Cocoon = [
			{coordinates:[3333,2606],popup:"<?=$localization['objects']['cocoon']['1']?>"},
			{coordinates:[5521,2442],popup:"<?=$localization['objects']['cocoon']['2']?>"},
			{coordinates:[4436,4107],popup:"<?=$localization['objects']['cocoon']['3']?>"},
			{coordinates:[1003,4935],popup:"<?=$localization['objects']['cocoon']['4']?>"},
			{coordinates:[926,2327],popup:"<?=$localization['objects']['cocoon']['5']?>"},
			{coordinates:[5248,217],popup:"<?=$localization['objects']['cocoon']['6']?>"},
			{coordinates:[4965,5879],popup:"<?=$localization['objects']['cocoon']['7']?>"}
		];
	let CocoonToggle = [];

// Mag coords
	let Mag = [
			{coordinates:[4755,1641],popup:"<?=$localization['objects']['mag']['1']?>"}
		];
	let MagToggle = [];

// Ryuker coords
	let RyukerDevice = [
			{coordinates:[1547,4074],popup:"<?=$localization['objects']['ryuker']['1']?>"},
			{coordinates:[2562,4171],popup:"<?=$localization['objects']['ryuker']['2']?>"},
			{coordinates:[611,5299],popup:"<?=$localization['objects']['ryuker']['3']?>"},
			{coordinates:[3094,2699],popup:"<?=$localization['objects']['ryuker']['4']?>"},
			{coordinates:[3340,3515],popup:"<?=$localization['objects']['ryuker']['5']?>"},
			{coordinates:[4053,4510],popup:"<?=$localization['objects']['ryuker']['6']?>"},
			{coordinates:[4297,2252],popup:"<?=$localization['objects']['ryuker']['7']?>"},
			{coordinates:[5503,1496],popup:"<?=$localization['objects']['ryuker']['8']?>"},	
			{coordinates:[4827,806],popup:"<?=$localization['objects']['ryuker']['9']?>"},
			{coordinates:[2599,822],popup:"<?=$localization['objects']['ryuker']['10']?>"},
			{coordinates:[1764,1881],popup:"<?=$localization['objects']['ryuker']['11']?>"},
			{coordinates:[4163,6110],popup:"<?=$localization['objects']['ryuker']['12']?>"},
			{coordinates:[5468,5729],popup:"<?=$localization['objects']['ryuker']['13']?>"},
			{coordinates:[5295,3919],popup:"<?=$localization['objects']['ryuker']['14']?>"}
		];		
	let RyukerDeviceToggle = [];

// Tower coords
	let Tower = [
			{coordinates:[830,5506],popup:"<?=$localization['objects']['tower']['1']?>"},
			{coordinates:[5740,1043],popup:"<?=$localization['objects']['tower']['2']?>"}
		];
	let TowerToggle = [];

// City coords
	let City = [
			{coordinates:[3483,3620],popup:"<?=$localization['objects']['city']['1']?>"},
			{coordinates:[1803,1529],popup:"<?=$localization['objects']['city']['2']?>"}
		];
	let CityToggle = [];

// Hut coords
	let Hut = [
			{coordinates:[3815,2925],popup:"<?=$localization['objects']['hut']['1']?>"},
			{coordinates:[3056,1742],popup:"<?=$localization['objects']['hut']['2']?>"},
			{coordinates:[1070,2054],popup:"<?=$localization['objects']['hut']['3']?>"}
		];
	let HutToggle = [];

// Urgent coords
	let UrgentQuest = [
			{coordinates:[5984,1772],popup:"<?=$localization['objects']['urgent']['1']?>"}
		];
	let UrgentQuestToggle = [];

// Dungeon coords
	let Dungeon = [
			{coordinates:[5069,2507],popup:"<?=$localization['objects']['dungeon']['1']?>"}
		];
	let DungeonToggle = [];
	
// BOXES
// Red Containers
	let redBox = [
		{coordinates:[6197,1856]},
		{coordinates:[5793,1262]},
		{coordinates:[5902,2606]},
		{coordinates:[5563,2753]},
		{coordinates:[5492,2560]},
		{coordinates:[5222,1702]},
		{coordinates:[5420,2924]},
		{coordinates:[5077,2063]},
		{coordinates:[5352,3194]},
		{coordinates:[4824,3361]},
		{coordinates:[4550,2181]},
		{coordinates:[4485,2855]},
		{coordinates:[4122,2345]},
		{coordinates:[4316,4226]},
		{coordinates:[3855,2891]},
		{coordinates:[3747,1350]},
		{coordinates:[4631,5200]},
		{coordinates:[3811,5305]},
		{coordinates:[3581,4825]},
		{coordinates:[3533,4745]},
		{coordinates:[3087,2363]},
		{coordinates:[2929,2138]},
		{coordinates:[2798,2186]},
		{coordinates:[2752,2315]},
		{coordinates:[2600,2565]},
		{coordinates:[2607,3021]},
		{coordinates:[2101,3604]},
		{coordinates:[2077,3454]},
		{coordinates:[1646,3091]},
		{coordinates:[2279,5651]},
		{coordinates:[2094,5538]},
		{coordinates:[1896,5497]},
		{coordinates:[2075,4178]},
		{coordinates:[1877,4058]},
		{coordinates:[1637,3754]},
		{coordinates:[1174,3503]},
		{coordinates:[1016,2962]},
		{coordinates:[836,3048]},
		{coordinates:[1411,5857]}
	];
	let redBoxToggle = [];

// White Containers
	let whiteBox = [
		{coordinates:[6454,1945]},
		{coordinates:[6350,1514]},
		{coordinates:[5894,2746]},
		{coordinates:[5743,2385]},
		{coordinates:[5735,2202]},
		{coordinates:[5549,1986]},
		{coordinates:[5512,1548]},
		{coordinates:[5399,1875]},
		{coordinates:[5416,2841]},
		{coordinates:[5375,2762]},
		{coordinates:[5150,2050]},
		{coordinates:[5136,2258]},
		{coordinates:[5095,2329]},
		{coordinates:[5022,1835]},
		{coordinates:[4983,2162]},
		{coordinates:[4978,2081]},
		{coordinates:[4920,2290]},
		{coordinates:[4889,2194]},
		{coordinates:[4671,2648]},
		{coordinates:[4583,2705]},
		{coordinates:[4655,2226]},
		{coordinates:[4566,2050]},
		{coordinates:[4392,1439]},
		{coordinates:[4191,1760]},
		{coordinates:[4256,2151]},
		{coordinates:[4326,2225]},
		{coordinates:[4184,2338]},
		{coordinates:[4088,1937]},
		{coordinates:[3918,1529]},
		{coordinates:[3863,1826]},
		{coordinates:[3615,1497]},
		{coordinates:[3541,1744]},
		{coordinates:[4031,2786]},
		{coordinates:[3863,2801]},
		{coordinates:[3790,2946]},
		{coordinates:[3645,2672]},
		{coordinates:[4622,3993]},
		{coordinates:[3935,4417]},
		{coordinates:[4695,4879]},
		{coordinates:[4703,5081]},
		{coordinates:[4717,5441]},
		{coordinates:[4519,5833]},
		{coordinates:[4350,6017]},
		{coordinates:[4664,6312]},
		{coordinates:[4645,6528]},
		{coordinates:[4671,6640]},
		{coordinates:[4704,6687]},
		{coordinates:[4564,6704]},
		{coordinates:[5575,2426]},
		{coordinates:[3047,2361]},
		{coordinates:[3270,2663]},
		{coordinates:[3337,3050]},
		{coordinates:[3215,3065]},
		{coordinates:[3206,4017]},
		{coordinates:[3143,4201]},
		{coordinates:[3015,3752]},
		{coordinates:[2958,3687]},
		{coordinates:[2966,3332]},
		{coordinates:[2726,3530]},
		{coordinates:[2733,3153]},
		{coordinates:[2693,2819]},
		{coordinates:[2496,3050]},
		{coordinates:[2692,2254]},
		{coordinates:[2401,3945]},
		{coordinates:[3503,5032]},
		{coordinates:[3447,5241]},
		{coordinates:[3446,5320]},
		{coordinates:[3350,4664]},
		{coordinates:[3372,5546]},
		{coordinates:[3151,5714]},
		{coordinates:[3197,5249]},
		{coordinates:[3046,5296]},
		{coordinates:[2886,5207]},
		{coordinates:[2791,5832]},
		{coordinates:[3005,5073]},
		{coordinates:[2932,4985]},
		{coordinates:[2886,4682]},
		{coordinates:[2812,4713]},
		{coordinates:[2943,5863]},
		{coordinates:[2735,5967]},
		{coordinates:[2510,6136]},
		{coordinates:[2382,5944]},
		{coordinates:[2495,5495]},
		{coordinates:[2309,5569]},
		{coordinates:[2653,4330]},
		{coordinates:[2534,5055]},
		{coordinates:[2364,5203]},
		{coordinates:[2300,5107]},
		{coordinates:[2270,5440]},
		{coordinates:[2110,5599]},
		{coordinates:[2117,5920]},
		{coordinates:[2142,6135]},
		{coordinates:[1838,5126]},
		{coordinates:[1878,6385]},
		{coordinates:[1717,6505]},
		{coordinates:[1669,6399]},
		{coordinates:[1358,5950]},
		{coordinates:[2136,3335]},
		{coordinates:[1973,3498]},
		{coordinates:[1923,4032]},
		{coordinates:[1818,3208]},
		{coordinates:[1864,3791]},
		{coordinates:[1783,4218]},
		{coordinates:[1689,3710]},
		{coordinates:[1544,3760]},
		{coordinates:[1696,3392]},
		{coordinates:[1728,3314]},
		{coordinates:[1758,3128]},
		{coordinates:[1798,2941]},
		{coordinates:[1199,3144]},
		{coordinates:[1031,2888]},
		{coordinates:[607,5664]},
		{coordinates:[191,5143]},
		{coordinates:[432,4407]},
		{coordinates:[722,3984]}
	];
	let whiteBoxToggle = [];

// Gold Containers
	let goldBox = [
		{coordinates:[4181,2593]},
		{coordinates:[2808,3737]},
		{coordinates:[1526,6179]}
	];
	let goldBoxToggle = [];

// FOOD
// Saute Peach
	let sautePeach = [
		{coordinates:[4736,3465]},
		{coordinates:[4399,4366]},
		{coordinates:[4319,5523]},
		{coordinates:[3792,4381]},
		{coordinates:[3224,2474]},
		{coordinates:[2658,2276]},
		{coordinates:[2517,2684]},
		{coordinates:[2963,3771]},
		{coordinates:[3658,1439]}
	];
	let sautePeachToggle = [];
	
// Saute Apple		
	let sauteApple = [
		{coordinates:[6459,1693]},
		{coordinates:[6283,2233]},
		{coordinates:[5893,1501]},
		{coordinates:[5982,2474]},
		{coordinates:[5701,2124]},
		{coordinates:[5654,2373]},
		{coordinates:[5631,2726]},
		{coordinates:[5473,1365]},
		{coordinates:[5428,1755]},
		{coordinates:[5371,1861]},
		{coordinates:[4918,3041]},
		{coordinates:[4175,2954]},
		{coordinates:[4137,2308]},
		{coordinates:[4113,1883]},
		{coordinates:[4370,1483]},
		{coordinates:[4609,1436]},
		{coordinates:[2876,3183]}
	];
	let sauteAppleToggle = [];
	
// Saute Pear		
	let sautePear = [
		{coordinates:[2227,3119]},
		{coordinates:[1382,2771]},
		{coordinates:[873,3075]},
		{coordinates:[1175,5738]},
		{coordinates:[545,5499]}
	];
	let sautePearToggle = [];
	
// Sodhe Clam		
	let sodheClam = [
		{coordinates:[1616,4638]},
		{coordinates:[1256,3386]},
		{coordinates:[1262,6114]},
		{coordinates:[1234,6001]},
		{coordinates:[1216,5938]},
		{coordinates:[148,4850]},
		{coordinates:[154,4635]},
		{coordinates:[324,4335]}
	];
	let sodheClamToggle = [];
	
// Soh Turnip		
	let sohTurnip = [
		{coordinates:[927,2986]},
		{coordinates:[1536,4581]},
		{coordinates:[1514,4879]},
		{coordinates:[960,5644]},
		{coordinates:[417,5604]},
		{coordinates:[250,5028]}
	];
	let sohTurnipToggle = [];
	
// Soh Mushroom		
	let sohMushroom = [
		{coordinates:[6474,1613]},
		{coordinates:[6323,1406]},
		{coordinates:[6178,1814]},
		{coordinates:[6203,2132]},
		{coordinates:[6170,1359]},
		{coordinates:[6011,1710]},
		{coordinates:[5979,1327]},
		{coordinates:[5826,1334]},
		{coordinates:[6057,2293]},
		{coordinates:[6019,2342]},
		{coordinates:[6035,2452]},
		{coordinates:[5908,2579]},
		{coordinates:[5892,2364]},
		{coordinates:[5780,2443]},
		{coordinates:[5796,2288]},
		{coordinates:[5819,1886]},
		{coordinates:[5804,1645]},
		{coordinates:[5725,1535]},
		{coordinates:[5724,1814]},
		{coordinates:[5569,1374]},
		{coordinates:[5574,1813]},
		{coordinates:[5483,1829]},
		{coordinates:[5422,1806]},
		{coordinates:[5418,1676]},
		{coordinates:[5348,1925]},
		{coordinates:[5316,1535]},
		{coordinates:[5267,1606]},
		{coordinates:[5228,1709]},
		{coordinates:[5189,1549]},
		{coordinates:[5636,2658]},
		{coordinates:[4799,1540]},
		{coordinates:[4182,2221]}
	];
	let sohMushroomToggle = [];
	
// Sodhe Crab		
	let sodheCrab = [
	{coordinates:[5333,3171]},
		{coordinates:[5295,3290]},
		{coordinates:[5037,3361]},
		{coordinates:[4916,3378]},
		{coordinates:[4837,3425]},
		{coordinates:[4837,3760]},
		{coordinates:[4813,3991]},
		{coordinates:[4566,4269]},
		{coordinates:[4541,4580]},
		{coordinates:[4680,4711]},
		{coordinates:[4805,4885]},
		{coordinates:[4838,4973]},
		{coordinates:[4876,5068]},
		{coordinates:[4934,5045]},
		{coordinates:[4989,5356]},
		{coordinates:[5014,5418]},
		{coordinates:[4581,5562]}
	];
	let sodheCrabToggle = [];
	
// Sodhe Lobster		
	let sodheLobster = [
		{coordinates:[5469,2700]},
		{coordinates:[5084,2596]},
		{coordinates:[5022,2117]},
		{coordinates:[4974,1934]},
		{coordinates:[4425,1652]}
	];
	let sodheLobsterToggle = [];
	
// Soh Herb		
	let sohHerb = [
		{coordinates:[4528,6873]},
		{coordinates:[4680,6514]},
		{coordinates:[4385,5794]},
		{coordinates:[4184,5667]},
		{coordinates:[4130,5882]},
		{coordinates:[3977,5819]},
		{coordinates:[3921,5499]},
		{coordinates:[3761,5157]},
		{coordinates:[3618,1900]},
		{coordinates:[3219,1933]},
		{coordinates:[2732,2283]},
		{coordinates:[2573,2922]}
	];
	let sohHerbToggle = [];

// Minerals
// Monotite
	let monotite = [
		{coordinates:[5415,3127]},
		{coordinates:[5317,3231]},
		{coordinates:[5163,3287]},
		{coordinates:[5065,3311]},
		{coordinates:[4934,3311]},
		{coordinates:[4880,3343]},
		{coordinates:[4818,3774]},
		{coordinates:[4760,3710]},
		{coordinates:[4634,4186]},
		{coordinates:[4514,4454]},
		{coordinates:[4514,4385]},
		{coordinates:[4864,5358]},
		{coordinates:[4064,5566]},
		{coordinates:[3651,1896]},
		{coordinates:[3425,2377]},
		{coordinates:[3315,2674]},
		{coordinates:[3267,2251]},
		{coordinates:[3236,2176]},
		{coordinates:[3197,2243]},
		{coordinates:[3156,2011]},
		{coordinates:[3091,2345]},
		{coordinates:[2805,2423]},
		{coordinates:[2830,2170]},
		{coordinates:[2763,2276]},
		{coordinates:[2733,2234]},
		{coordinates:[2674,2321]},
		{coordinates:[2638,2289]}
	];
	let monotiteToggle = [];

// Dualomite
	let dualomite = [
		{coordinates:[2413,3176]},
		{coordinates:[2285,3294]},
		{coordinates:[950,2967]}
	];
	let dualomiteToggle = [];
		
// Trinite
	let trinite = [
		{coordinates:[6485,1682]},
		{coordinates:[6348,1619]},
		{coordinates:[5638,2344]},
		{coordinates:[5512,2216]},
		{coordinates:[5568,1965]},
		{coordinates:[5486,1915]},
		{coordinates:[5330,1752]},
		{coordinates:[5304,1609]},
		{coordinates:[5272,1646]},
		{coordinates:[4385,1449]}
	];
	let triniteToggle = [];


// Photon Chunk
	let PhotonChunk = [
		{coordinates:[2606,2553]},
		{coordinates:[2306,3002]},
		{coordinates:[2299,3024]},
		{coordinates:[2280,3087]},
		{coordinates:[2273,3113]},
		{coordinates:[2257,3145]},
		{coordinates:[2233,3233]},
		{coordinates:[2167,3327]},
		{coordinates:[2340,3943]},
		{coordinates:[1986,3360]},
		{coordinates:[1581,3212]},
		{coordinates:[1558,3073]},
		{coordinates:[1396,2960]},
		{coordinates:[1313,2961]},
		{coordinates:[1250,2975]},
		{coordinates:[1188,3025]},
		{coordinates:[1188,3087]},
		{coordinates:[1134,5549]},
		{coordinates:[4712,4071]}
	];
	let PhotonChunkToggle = [];


// Photon Quartz
	let PhotonQuartz = [
		{coordinates:[6552,1728]},
		{coordinates:[6511,1635]},
		{coordinates:[6410,1635]},
		{coordinates:[6439,1588]},
		{coordinates:[6360,1555]},
		{coordinates:[6343,1466]},
		{coordinates:[6240,1347]},
		{coordinates:[6113,1283]},
		{coordinates:[6479,2027]},
		{coordinates:[6264,2265]},
		{coordinates:[5519,1403]},
		{coordinates:[5256,1683]},
		{coordinates:[5241,1740]},
		{coordinates:[5704,2433]},
		{coordinates:[5631,2433]},
		{coordinates:[5722,2211]},
		{coordinates:[5741,2128]},
		{coordinates:[5640,2028]},
		{coordinates:[5589,2073]},
		{coordinates:[5542,2019]},
		{coordinates:[5525,1949]},
		{coordinates:[5383,1995]},
		{coordinates:[5447,2603]},
		{coordinates:[5496,2785]},
		{coordinates:[5458,2873]},
		{coordinates:[5192,2962]},
		{coordinates:[5120,3027]},
		{coordinates:[4206,2859]},
		{coordinates:[4100,2870]},
		{coordinates:[4697,4718]},
		{coordinates:[4853,5039]},
		{coordinates:[4962,5366]},
		{coordinates:[3874,4638]},
		{coordinates:[2986,2258]},
		{coordinates:[2627,2233]}
	];
	let PhotonQuartzToggle = [];