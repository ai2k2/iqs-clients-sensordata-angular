
<?hh

use PHPUnit\Framework\TestCase;

final class HelloWorldTestCase extends TestCase {

  public function testCanBeCreatedFromValidEmailAddress() {
    $this->assertInstanceOf(