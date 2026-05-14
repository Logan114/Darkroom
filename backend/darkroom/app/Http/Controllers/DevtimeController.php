<?php

namespace App\Http\Controllers;

use App\Models\developer;
use App\Models\devtime;
use App\Models\dilution;
use App\Models\exposures;
use App\Models\filmstocks;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
class DevtimeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(devtime $devtime)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(devtime $devtime)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, devtime $devtime)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(devtime $devtime)
    {
        //
    }

    
}


/***
public function finalOutput(Request $request)
    {
        $validated = $request->validate([
            'stockID' => ['required', 'integer'],
            'expID' => ['required', 'integer'],
            'DevID' => ['required', 'integer'],
            'DilutionID' => ['required', 'integer'],
        ]);

        $filmstock = filmstocks::query()->find($validated['stockID']);
        $exposure = exposures::query()->find($validated['expID']);
        $developer = developer::query()->find($validated['DevID']);
        $dilution = dilution::query()->find($validated['DilutionID']);

        if (! $filmstock || ! $exposure || ! $developer || ! $dilution) {
            return response()->json([
                'message' => 'One or more records could not be found.',
            ], 404);
        }

        if ((int) $exposure->StockID !== (int) $filmstock->stockID) {
            return response()->json([
                'message' => 'The provided exposure does not belong to the provided film stock.',
            ], 422);
        }

        if ((int) $dilution->Developer !== (int) $developer->DevID) {
            return response()->json([
                'message' => 'The provided dilution does not belong to the provided developer.',
            ], 422);
        }

        $devtime = devtime::query()
            ->where('ISO', $exposure->expID)
            ->where('Dilution', $dilution->DilutionID)
            ->first();

        if (! $devtime) {
            return response()->json([
                'message' => 'No devtime record matches the provided exposure and dilution.',
            ], 404);
        }

        return response()->json([
            'final_output' => [
                'filmstock' => [
                    'manufacturer' => $filmstock->manufacturer,
                    'stock_name' => $filmstock->stock_name,
                    'box_iso' => $filmstock->box_iso,
                    'format' => $filmstock->format,
                ],
                'exposure' => [
                    'iso' => $exposure->ISO,
                    'push' => $exposure->push,
                ],
                'developer' => [
                    'brand' => $developer->Brand,
                    'name' => $developer->name,
                ],
                'dilution' => [
                    'dilution' => $dilution->dilution,
                ],
                'devtime' => [
                    'minutes' => $devtime->minutes,
                    'agitation_duration' => $devtime->agitDuration,
                    'agitation_interval' => $devtime->agitInterval,
                ],
            ],
        ]);
    }

    public function search(Request $request)
    {
        $validated = $request->validate([
            'developer' => ['required', 'string'],
            'filmstock' => ['required', 'string'],
            'iso' => ['required', 'integer'],
        ]);

        $developerFilter = $validated['developer'];
        $filmstockFilter = $validated['filmstock'];

        $records = devtime::query()
            ->with([
                'dilution.developer',
                'exposure.filmstock',
            ])
            ->whereHas('dilution.developer', function (Builder $query) use ($developerFilter) {
                $query->where(function (Builder $developerQuery) use ($developerFilter) {
                    if (ctype_digit($developerFilter)) {
                        $developerQuery->where('DevID', (int) $developerFilter);

                        return;
                    }

                    $developerQuery->where('name', $developerFilter);
                });
            })
            ->whereHas('exposure', function (Builder $query) use ($validated, $filmstockFilter) {
                $query->where('ISO', $validated['iso'])
                    ->whereHas('filmstock', function (Builder $filmstockQuery) use ($filmstockFilter) {
                        $filmstockQuery->where(function (Builder $stockQuery) use ($filmstockFilter) {
                            if (ctype_digit($filmstockFilter)) {
                                $stockQuery->where('stockID', (int) $filmstockFilter);

                                return;
                            }

                            $stockQuery->where('stock_name', $filmstockFilter);
                        });
                    });
            })
            ->orderBy('minutes')
            ->get();

        if ($records->isEmpty()) {
            return response()->json([
                'message' => 'No development times found for that developer, film stock, and ISO.',
            ], 404);
        }

        $first = $records->first();
        $developer = $first->dilution->developer;
        $exposure = $first->exposure;
        $filmstock = $exposure->filmstock;

        return response()->json([
            'developer' => [
                'id' => $developer->DevID,
                'brand' => $developer->Brand,
                'name' => $developer->name,
            ],
            'filmstock' => [
                'id' => $filmstock->stockID,
                'manufacturer' => $filmstock->manufacturer,
                'stock_name' => $filmstock->stock_name,
                'box_iso' => $filmstock->box_iso,
                'format' => $filmstock->format,
            ],
            'exposure' => [
                'id' => $exposure->expID,
                'iso' => $exposure->ISO,
                'push' => $exposure->push,
            ],
            'development_times' => $records->map(function (devtime $record) {
                return [
                    'dev_time_id' => $record->DevTimeID,
                    'iso_reference_id' => $record->ISO,
                    'dilution_id' => $record->Dilution,
                    'dilution' => $record->dilution->dilution,
                    'minutes' => $record->minutes,
                    'agitation_duration' => $record->agitDuration,
                    'agitation_interval' => $record->agitInterval,
                ];
            })->values(),
        ]);
    }

**/