# pass something like "123 4567 file.css" and a table named "file".css for sizes 0x0 to 123x4567 will be made

name=$(awk '{print $3}' <<< $@)
>"$name" # clears file

for ((i=0;i<=$(awk '{print $1}' <<< $@);i++)); do # does all of the css selectors for width
	echo -n "@media (width:"$i"px){#w{background:url('/?w="$i"')}}" >> "$name"
done

for ((i=0;i<=$(awk '{print $2}' <<< $@);i++)); do # makes all css selectors for height
	echo -n "@media (height:"$i"px){#h{background:url('/?h="$i"')}}" >> "$name"
done