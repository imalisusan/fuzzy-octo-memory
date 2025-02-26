<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClothingItemRequest;
use App\Http\Requests\UpdateClothingItemRequest;
use App\Models\ClothingItem;

class ClothingItemController extends Controller
{
    public function index()
    {
        return ClothingItem::where('user_id', auth()->id())->get();
    }

    public function store(StoreClothingItemRequest $request)
    {
        $path = $request->file('image')?->store('images', 'public');

        return ClothingItem::create([
            'user_id' => auth()->id(),
            'name' => $request->name,
            'category' => $request->category,
            'color' => $request->color,
            'size' => $request->size,
            'brand' => $request->brand,
            'material' => $request->material,
            'season' => $request->season,
            'image' => $path,
        ]);
    }

    public function show($id)
    {
        $item = ClothingItem::find($id);

        if (! $item) {
            return response()->json(['message' => 'Item not found'], 404);
        }

        return response()->json($item);
    }

    public function update(UpdateClothingItemRequest $request, ClothingItem $item)
    {
        $item->update($request->validated());

        return response()->json(['message' => 'Item updated successfully']);
    }

    public function destroy(ClothingItem $item)
    {
        $item->delete();

        return response()->json(['message' => 'Item deleted successfully']);
    }
}
