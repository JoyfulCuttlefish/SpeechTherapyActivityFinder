  <form action="/">
    <div class="relative border-2 border-gray-100 m-4 rounded-lg">
        <div class="absolute top-4 left-3">
            <i class="fa fa-search text-gray-400 z-20 hover:text-gray-500"></i>
        </div>
        <!-- Hidden input to store the actual search term -->
        <input type="hidden" id="actual_search" name="search" value="{{ $searchTerm }}">
        <!-- Input to display the search terms to the user -->
        <input type="text" id="search_display" class="h-14 w-full pl-10 pr-20 rounded-lg z-0 focus:shadow focus:outline-none"
            placeholder="Search STAF..." value="{{ $searchTerm }}" />
        <div class="absolute top-2 right-2">
            <button type="submit" class="h-10 w-20 text-white rounded-lg bg-purple-500 hover:bg-blue-800">
                Search
            </button>
        </div>
    </div>
    <div class="mt-4">
        <label for="tag" class="block text-blue-900">Select tags to refine search:</label>
        <select id="tag" name="tag[]" multiple class="block w-full mt-1 rounded-lg border-gray-300 focus:border-blue-800 focus:ring focus:ring-blue-200">
               
                @foreach($allTags as $tag)
                    <option value="{{ $tag }}" {{ in_array($tag, $selectedTags) ? 'selected' : '' }}>{{ $tag }}</option>
                @endforeach
            </select>
        </div>

        </select>
    </div>
</form>

<script>
    // JavaScript to update the actual search term when the user modifies the input
    const searchDisplay = document.getElementById('search_display');
    const actualSearch = document.getElementById('actual_search');

    searchDisplay.addEventListener('input', function () {
        actualSearch.value = this.value;
    });
</script>
