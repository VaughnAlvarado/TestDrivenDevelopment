watch("app/(.*).php") do |match|
	system 'phpunit'
end

watch("app/test/.*Test.php") do |match|
	system 'phpunit'
end

